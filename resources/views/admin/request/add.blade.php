<x-layout>

    <div class="pagetitle">
        <h1>{{ $page_title ?? "Dashboard"}}</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard db-work-area">

        <div class="row">

            <div class="col-md-12">

                <!-- Data Card Area -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">

                            <h5 class="card-title">
                                {{ $page_subtitle ?? ""}}
                                | <span>
                                    <a href="{{ url('admin/reading-list') }}">Reading List</a>
                                </span>
                            </h5>

                            <?php 

                                $books = \App\Models\Book::all();

                            ?>

                            <div class="alpine-parent row" x-data="{

                                books : [],

                                query : '',

                                bookId : '',

                                bookTitle : '',

                                showNothing : false,
                                showResult : false,

                                async querySubmit(){

                                    this.books = await(
                                        
                                        await fetch('/admin/book-search', {
                                            method : 'POST',
                                            headers : {
                                                'Content-type' : 'application/json',
                                                'X-CSRF-TOKEN' : document.querySelector('meta[name=csrf-token]').content,
                                            },
                                            body : JSON.stringify({ 
                                                query : this.query 
                                            }),
                                        })).json();

                                    if(this.books.length < 1 ){
                                        this.showNothing = true;
                                        this.showResult = false;
                                    }
                                    else{
                                        this.showNothing = false;
                                        this.showResult = true;
                                    }

                                },

                            }">

                                <div class="form-panel col-md-6 col-sm-12">

                                    <!-- Ajax Search Form -->
                                    <form action="" method="POST">
                                        <meta name="csrf-token" content="{{ csrf_token() }}">
                                        <label for="book_id" class="form-label">Search Query</label>
                                        <input type="text" class="form-control" x-model="query" @input.debounce="querySubmit">
                                    </form>

                                    <!-- Ajax Search Result -->
                                    <div class="live-search-result mt-3">
                                        <table class="table table-borderless align-middle" x-show="showResult" style="display: none">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center">ID</th>
                                                    <th scope="col">Book Title (Bn)</th>
                                                    <th scope="col">Book Title (Bn)</th>
                                                    <th scope="col">Author</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <template x-for="book in books">
                                                    <tr class="row-parent">
                                                        <th scope="row" class="text-center" x-text="book.id"></th>
                                                        <td>
                                                            <a href="#" x-text="book.title_bn" @click.prevent="bookId=book.id; bookTitle=book.title_bn"></a>
                                                        </td>
                                                        <td x-text="book.title_en"></td>
                                                        <td>
                                                            <template x-for="author in book.authors">
                                                                <span x-text="author.title_bn"></span>
                                                            </template>
                                                        </td>
                                                    </tr>
                                                </template>
                                            </tbody>
                                        </table>

                                        <span class="text-danger" x-show="showNothing" style="display: none">No search results were found.</span>

                                    </div>

                                </div>
    
                                <div class="form-panel col-md-6 col-sm-12">
                                
                                    <form class="row g-3" method="POST" action="{{ url('admin/reading-list') }}">
    
                                        @csrf
                                        
                                        @php
    
                                            $bookIdFromDb = null;
                                            $bookNameFromDb = null;
                                            $book = null;

                                            $xModelForID = 'bookId';
                                            $xModelForTitle = 'bookTitle';
    
                                            if( isset($book_id) && $book_id != null )
                                            {
                                                $book = \App\Models\Book::findOrFail($book_id);
                                                $bookIdFromDb = $book->id;
                                                $bookNameFromDb = $book->title_bn;
                                                $xModelForID = '';
                                                $xModelForTitle = '';
                                            }
    
                                        @endphp
                                           
                                        <div class="col-md-12 col-sm-12">
    
                                            <label for="book_id" class="form-label">Book ID <x-form.field-required/></label>
                                            <div class="input-group has-validation">
                                                <x-form.textarea name="book_id" rows=1 x-text="{{ $xModelForID }}">{{ old('book_id', $bookIdFromDb) }}</x-form.textarea>
                                            </div>
    
                                            <x-form.error name="book_id"/>
    
                                        </div>
    
                                        <div class="col-md-12 col-sm-12">
    
                                            <label for="book_name" class="form-label">Book Name</label>
                                            <div class="input-group has-validation">
                                                <x-form.textarea name="book_name" x-text="{{ $xModelForTitle }}" rows=1 disabled>{{ old('book_name', $bookNameFromDb) }}</x-form.textarea>
                                            </div>
    
                                            <x-form.error name="book_name"/>
    
                                        </div>
                                        
                                        <!-- Start Date -->
                                        <div class="col-md-6 col-sm-12">
                                            <label for="start_date" class="form-label">Start Date</label>
                                            <div class="input-group has-validation">
                                                <x-form.input name="start_date" type="date" />
                                            </div>
    
                                            <x-form.error name="start_date"/>
                                        </div>
                                        
                                        <!-- End Date -->
                                        <div class="col-md-6 col-sm-12">
                                            <label for="end_date" class="form-label">End Date</label>
                                            <div class="input-group has-validation">
                                                <x-form.input name="end_date" type="date" />
                                            </div>
    
                                            <x-form.error name="end_date"/>
                                        </div>
    
                                        <!-- Recommendation -->
                                        <div class="col-md-12 col-sm-12">
                                            <fieldset class="row mb-3">
                                                <legend class="col-form-label pt-0 mb-2">Reader Recommended ?</legend>
                                                <div class="input-group">
                                                    <div class="form-check">
                                                        <label class="form-check-label">    
                                                            <input class="form-check-input" type="radio" name="reader_recommended" value="0" <?php echo old("reader_recommended", 0) == 0 ? "checked" : "" ?>>
                                                            Yet to Recommend
                                                        </label>
                                                    </div>
                                                    <div class="form-check ms-5">
                                                        <label class="form-check-label">    
                                                            <input class="form-check-input" type="radio" name="reader_recommended" value="1" <?php echo old("reader_recommended") == 1 ? "checked" : "" ?>>
                                                            Recommended
                                                        </label>
                                                    </div>
                                                    <div class="form-check ms-5">
                                                        <label class="form-check-label">    
                                                            <input class="form-check-input" type="radio" name="reader_recommended" value="2" <?php echo old("reader_recommended") == 2 ? "checked" : "" ?>>
                                                            Not Recommended
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
    
                                        <!-- Reader Comments -->
                                        <div class="col-md-12 col-sm-12">
                                            <label for="comments" class="form-label">Comments (Optional)</label>
                                            <div class="input-group has-validation">
                                                <x-form.textarea name="comments"/>
                                            </div>
    
                                            <x-form.error name="comments"/>
                                        </div>
    
                                        <!-- Reader Selection -->
                                        <div class="col-md-6 col-sm-12">
                                            <label class="form-label">Reading Done By <x-form.field-required/></label>
                                            <div class="input-group">
    
                                                <select name="user_id" class="form-select" aria-label="Select Reader">
    
                                                    <option value="">Selec Reader</option>
    
                                                    @foreach( \App\Models\User::all() as $user )
    
                                                    <option value="{{ $user->id }}" <?php echo old( "user_id", auth()->user()->id ) == $user->id ? "selected" : "" ?>>{{ $user->name }}</option>
    
                                                    @endforeach
    
                                                </select>
    
                                                <x-form.error name="user_id"/>
    
                                            </div>
                                        </div>
    
                                        <div class="col-6 col-sm-12">
                                            <p class="text-info m-0">Note: Fields marked with <x-form.field-required/> are required.</p>
                                        </div>
    
                                        <div class="col-md-12 col-sm-12 mt-3">
                                            <button class="btn btn-sm btn-primary w-auto" type="submit">Add in Reading List</button> &nbsp;
                                            <a class="btn btn-sm btn-warning" href="{{ url('admin/reading-list') }}">Back to Reading List</a>
                                        </div>
                                        
                                    </form>
    
                                </div> <!-- End of .form-panel -->

                            </div> <!-- End of .alpine-parent -->
                            
                        </div>

                    </div>
                </div><!-- End of "Data Card Area" -->

            </div>

        </div> <!-- End of .row -->

    </section> <!-- End of .section wrapper -->

</x-layout>