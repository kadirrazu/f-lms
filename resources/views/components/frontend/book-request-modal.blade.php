<!-- Modal -->
<div class="modal modal-lg fade" id="bookRequestModal" tabindex="-1" aria-labelledby="bookRequestModalLabel" aria-hidden="true">
    <div class="modal-dialog" x-data="{

        userName : '<?php echo auth()->user()->name_bn ?? auth()->user()->name; ?>',
        userId : <?php echo auth()->user()->id; ?>,
        bookName : '<?php echo $book->title_bn; ?>',
        bookId : '<?php echo $book->id; ?>',
        contactNumber : '',
        contactAddress : '',
        requestNotes : '',
        termsCheck : false,
        showContactNumberError : false,
        showContactAddressError : false,
        showTermsCheckError : false,
        showRequestForm : true,
        requestResult : '',

        checkAndClearError : function(e){
            if( this.contactNumber.trim().length !== 0 ){
                this.showContactNumberError = false; 
            }

            if( this.contactAddress.trim().length !== 0 ){
                this.showContactAddressError = false; 
            }

            if( this.termsCheck === true ){
                this.showTermsCheckError = false;
            }
        },

        validateRequestForm : function(e){

            this.showContactNumberError = false;
            this.showContactAddressError = false;
            this.showTermsCheckError = false;
            let validationError = false;

            if( this.contactNumber.trim().length == 0 || this.contactNumber.trim().length !== 11 ){
                this.showContactNumberError = true;
                validationError = true;
            }
            if( this.contactAddress.trim().length == 0 ){
                this.showContactAddressError = true;
                validationError = true;
            }
            if( this.termsCheck !== true ){
                this.showTermsCheckError = true;
                validationError = true;
            }

            if( validationError === false ){
                this.submitRequestFormToServer();
            }
        },

        async submitRequestFormToServer(){

            this.requestResult = await(
                    
            await fetch('/book-request-submission', {
                method : 'POST',
                headers : {
                    'Content-type' : 'application/json',
                    'X-CSRF-TOKEN' : document.querySelector('meta[name=csrf-token]').content,
                },
                body : JSON.stringify({ 
                    userId : this.userId, 
                    bookId : this.bookId, 
                    contactNumber : this.contactNumber, 
                    contactAddress : this.contactAddress, 
                    requestNotes : this.requestNotes, 
                    agreedWithTerms : this.termsCheck, 
                }),
            })).json();

            if( this.requestResult.response === true ){
                this.showRequestForm = false;
            }

        },
        
    }">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="bookRequestModalLabel">
                <span class="text-info">"{{ $book->title_bn }}"</span> - 
                বইটি পড়ার জন্য সংগ্রহের অনুরোধ ফরম -
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <template x-if="showRequestForm === true">
                <form action="#" x-on:submit.prevent="">

                <meta name="csrf-token" content="{{ csrf_token() }}">

                <div class="mb-3">
                    <label for="user_name" class="form-label">অনুরোধকারীর নাম</label>
                    <input class="form-control" type="text" id="user_name" name="user_name" value="{{ auth()->user()->name_bn ?? auth()->user()->name }}" disabled x-model="userName">
                    <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}" x-model="userId">
                </div>   
                <div class="mb-3">
                    <label for="book_name" class="form-label">বইয়ের নাম</label>
                    <input class="form-control" type="text" id="book_name" name="book_name" value="{{ $book->title_bn }}" disabled x-model="bookName">
                    <input type="hidden" id="book_id" name="book_id" value="{{ $book->id }}" x-model="bookId">
                </div>    
                <div class="mb-3">
                    <label for="contact_number" class="form-label">
                        যোগাযোগের মোবাইল নম্বর
                        <span class="text-danger">*</span>
                    </label>
                    <input class="form-control" type="text" id="contact_number" name="contact_number" value="" placeholder="আপনার সাথে যোগাযোগের মোবাইল নম্বর" x-model="contactNumber" @input.debounce="checkAndClearError">
                    <p class="req-form-error text-danger mt-2 mb-2 ms-1 text-sm fw-lighter" x-show="showContactNumberError">*মোবাইল নম্বর ফিল্ডটি সঠিকভাবে পূরণ করা হয়নি। সঠিক মোবাইল নম্বর দিন এবং ডিজিট সংখ্যা চেক করুন।</p>
                </div>    
                <div class="mb-3">
                    <label for="contact_address" class="form-label">
                        কোন ঠিকানায় বইটি পেতে চান?
                        <span class="text-danger">*</span>
                    </label>
                    <textarea class="form-control" name="contact_address" id="contact_address" rows="2" x-model="contactAddress"></textarea>
                    <p class="req-form-error text-danger mt-2 mb-2 ms-1 text-sm fw-lighter" x-show="showContactAddressError">*আপনার ঠিকানা ফিল্ডটি সঠিকভাবে পূরণ করা হয়নি।</p>
                </div>    
                <div class="mb-3">
                    <label for="request_notes" class="form-label">
                        আর কিছু বলতে চান কি?
                    </label>
                    <textarea class="form-control" name="request_notes" id="request_notes" rows="2" x-model="requestNotes"></textarea>
                </div>

                <div class="border border-info px-4 py-3 mb-3">
                    <span class="text-info text-decoration-underline">শর্তাবলীঃ</span><br>
                    <span class="text-danger">১) বইটি আমি যত্নের সাথে ব্যবহার করবো।</span><br>
                    <span class="text-danger">২) বইটি হাতে পাবার পর সর্বোচ্চ ২১ (একুশ) দিনের মধ্যে নিজ দায়িত্ত্বে ফেরৎ প্রদান করবো।</span>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" name="terms" type="checkbox" value="1" id="termsCheck"  x-model="termsCheck" @input.debounce="checkAndClearError">
                    <label class="form-check-label" for="termsCheck">
                        আমি বইটি পাবার শর্তসমূহ পড়েছি এবং সবগুলো শর্তের ব্যাপারে সম্মত আছি।
                    </label>
                </div>

                <p class="req-form-error text-danger mt-1 mb-3 ms-1 text-sm fw-lighter" x-show="showTermsCheckError">*আপনি শর্তাবলীর সাথে একমত হননি! শর্তগুলো পড়ুন এবং চেকবক্সে ক্লিক করে একনলেজ করুন।</p>

                <button type="submit" class="btn btn-primary" @click="validateRequestForm">অনুরোধ প্রেরণ করুন</button>

                </form>
            </template>

            <template x-if=" requestResult.response === true ">
                <p class="text-success p-3 border rounded border-success">
                    আপনার অনুরোধটি সিস্টেমে রেকর্ড করা হয়েছে এবং এডমিনিস্ট্রেটরের নিকট নোটিফিকেশন প্রেরণ করা হয়েছে। ধন্যবাদ।
                </p>
            </template>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বন্ধ করুন</button>
        </div>
        </div>
    </div>
</div>