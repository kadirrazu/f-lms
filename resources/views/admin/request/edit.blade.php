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

                            <h5 class="card-title">{{ $page_subtitle ?? "" }} - <span>{{ ' ' . $model->book->title_bn ?? "" }}</span></h5>

                            @if( !empty($model) )

                            <div class="form-panel col-md-6 col-sm-12">
                            
                                <form class="row g-3" method="POST" action="{{ url('admin/request/' . $model->id) }}">

                                    @csrf

                                    @method('PATCH')

                                    <div class="col-md-12 col-sm-12">

                                        <label for="book_id" class="form-label">Book ID <x-form.field-required/></label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="book_id" type="number" required :value="old('book_id', $model->book_id)"/>
                                        </div>

                                        <x-form.error name="book_id"/>

                                    </div>

                                    <div class="col-md-12 col-sm-12">

                                        <label for="book_name" class="form-label">Book Name</label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="book_name" type="text" :value="old('book_name', $model->book->title_bn)" disabled/>
                                        </div>

                                        <x-form.error name="book_name"/>

                                    </div>

                                    <div class="col-md-12 col-sm-12">

                                        <label for="mobile" class="form-label">Contact Number <x-form.field-required/></label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="mobile" type="text" required :value="old('mobile', $model->mobile)"/>
                                        </div>

                                        <x-form.error name="mobile"/>

                                    </div>

                                    <div class="col-md-12 col-sm-12">

                                        <label for="address" class="form-label">Address <x-form.field-required/></label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="address" type="text" required :value="old('address', $model->address)"/>
                                        </div>

                                        <x-form.error name="address"/>

                                    </div>

                                    <div class="col-md-12 col-sm-12">

                                        <label for="request_notes" class="form-label">Request Notes</label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="request_notes" type="text" :value="old('request_notes', $model->request_notes)"/>
                                        </div>

                                        <x-form.error name="request_notes"/>

                                    </div>

                                    <div class="col-md-12 col-sm-12">

                                        <div class="col-md-6 col-sm-12">
                                            <label class="form-label">Terms Agreement <x-form.field-required/></label>
                                            <div class="input-group">

                                                <select name="terms_agreed" class="form-select" aria-label="Select Agreement">

                                                    <option value="1" <?php echo old( "terms_agreed", $model->terms_agreed ) == 1 ? "selected" : "" ?>>Agreed</option>

                                                    <option value="0" <?php echo old( "terms_agreed", $model->terms_agreed ) == 0 ? "selected" : "" ?>>Not Agreed</option>

                                                </select>

                                                <x-form.error name="terms_agreed"/>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6 col-sm-12">

                                        <div class="col-md-6 col-sm-12">
                                            <label class="form-label">Issue Status</label>
                                            <div class="input-group">

                                                <select name="issued" class="form-select" aria-label="Select Agreement">

                                                    <option value="1" <?php echo old( "issued", $model->issued ) == 1 ? "selected" : "" ?>>Issued</option>

                                                    <option value="0" <?php echo old( "issued", $model->issued ) == 0 ? "selected" : "" ?>>Pending</option>

                                                    <option value="2" <?php echo old( "issued", $model->issued ) == 2 ? "selected" : "" ?>>Canceled</option>

                                                </select>

                                                <x-form.error name="issued"/>

                                            </div>
                                        </div>

                                    </div>
                                    
                                    <div class="col-md-6 col-sm-12">

                                        <div class="col-md-6 col-sm-12">
                                            <label class="form-label">Return Status</label>
                                            <div class="input-group">

                                                <select name="returned" class="form-select" aria-label="Select Return Status">

                                                    <option value="0" <?php echo old( "returned", $model->returned ) == 0 ? "selected" : "" ?>>Not Applicable</option>

                                                    <option value="1" <?php echo old( "returned", $model->returned ) == 1 ? "selected" : "" ?>>Returned</option>

                                                    <option value="2" <?php echo old( "returned", $model->returned ) == 2 ? "selected" : "" ?>>Pending</option>

                                                </select>

                                                <x-form.error name="returned"/>

                                            </div>
                                        </div>

                                    </div>
                                    
                                    <!-- Start Date -->
                                    <div class="col-md-6 col-sm-12">
                                        <label for="issue_date" class="form-label">Issue Date</label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="issue_date" type="date" :value="old('issue_date', $model->issue_date)"/>
                                        </div>

                                        <x-form.error name="issue_date"/>   
                                    </div>
                                    
                                    <!-- End Date -->
                                    <div class="col-md-6 col-sm-12">
                                        <label for="return_date" class="form-label">Return Date</label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="return_date" type="date" :value="old('return_date', $model->return_date)" />
                                        </div>

                                        <x-form.error name="return_date"/>
                                    </div>

                                    <div class="col-md-12 col-sm-12">

                                        <label for="admin_notes" class="form-label">Administrator Notes</label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="admin_notes" type="text" :value="old('admin_notes', $model->admin_notes)"/>
                                        </div>

                                        <x-form.error name="admin_notes"/>

                                    </div>

                                    <!-- Requester Selection -->
                                    <div class="col-md-6 col-sm-12">
                                        <label class="form-label">Requested By <x-form.field-required/></label>
                                        <div class="input-group">

                                            <select name="user_id" class="form-select" aria-label="Select Reader">

                                                <option value="">Selec Requester</option>

                                                @foreach( \App\Models\User::all() as $user )

                                                <option value="{{ $user->id }}" <?php echo old( "user_id", $model->user_id ) == $user->id ? "selected" : "" ?>>{{ $user->name }}</option>

                                                @endforeach

                                            </select>

                                            <x-form.error name="user_id"/>

                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
                                        <p class="text-info m-0">Note: Fields marked with <x-form.field-required/> are required.</p>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
                                        <button class="btn btn-sm btn-warning w-auto" type="submit">Update Request</button> &nbsp;
                                        <a class="btn btn-sm btn-secondary" href="{{ url('admin/request') }}">Back to Access Request List</a>
                                    </div>
                                    
                                </form>

                            </div> <!-- End of .form-panel -->
                            

                            @else

                                <p class="fw-semibold text-danger">No data were found for the targeted item.</p>

                            @endif

                        </div>

                    </div>
                </div><!-- End of "Data Card Area" -->

            </div>

        </div> <!-- End of .row -->

    </section> <!-- End of .section wrapper -->

</x-layout>