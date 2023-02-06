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
                                    <a href="{{ url('admin/user') }}">All User</a>
                                </span>
                            </h5>

                            <div class="form-panel">
                            
                                <form class="row g-3" method="POST" action="{{ url('admin/user') }}">

                                    @csrf

                                    <div class="col-md-6 col-sm-12">
                                        <label for="name" class="form-label">Name <x-form.field-required /></label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="name" type="text" required />
                                        </div>

                                        <x-form.error name="name"/>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label for="name_bn" class="form-label">Name (In Bangla, optional)</label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="name_bn" type="text" />
                                        </div>

                                        <x-form.error name="name_bn"/>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label for="avatar" class="form-label">Avatar ID (optional)</label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="avatar" type="text" />
                                        </div>

                                        <x-form.error name="avatar"/>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label for="mobile" class="form-label">Mobile <x-form.field-required/></label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="mobile" type="text" required />
                                        </div>

                                        <x-form.error name="mobile"/>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label for="email" class="form-label">Email <x-form.field-required/></label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="email" type="email" required />
                                        </div>

                                        <x-form.error name="email"/>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label for="username" class="form-label">Username <x-form.field-required/></label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="username" type="text" required />
                                        </div>

                                        <x-form.error name="username"/>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label for="password" class="form-label">Password <x-form.field-required/></label>
                                        <x-form.input name="password" type="password" required />
                                        <x-form.error name="password"/>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label for="password_confirmation" class="form-label">Confirm Password <x-form.field-required/></label>
                                        <x-form.input name="password_confirmation" type="password" required />
                                        <x-form.error name="password_confirmation"/>
                                    </div>

                                    <div class="col-md-6 col-sm-12 align-bottom">
                                        <div class="row mb-3">
                                            <label class="col-sm-4 form-label">Select Role <x-form.field-required/></label>
                                            <div class="col-sm-8">
                                                <select name="role" class="form-select" aria-label="Select Role">
                                                    <option value="">Selec Appropriate Role</option>
                                                    <option value="user" <?php echo old("role") == 'user' ? "selected" : "" ?>>User</option>
                                                    <option value="administrator" <?php echo old("role") == 'administrator' ? "selected" : "" ?>>Administrator</option>
                                                </select>

                                                <x-form.error name="role"/>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <p class="text-info m-0">Note: Fields marked with <x-form.field-required/> are required.</p>
                                    </div>

                                    <div class="col-md-12 col-sm-12 mt-3">
                                        <button class="btn btn-sm btn-primary w-auto" type="submit">Add User</button> &nbsp;
                                        <a class="btn btn-sm btn-warning" href="{{ url('admin/user') }}">Back to All Users</a>
                                    </div>
                                    
                                </form>

                            </div> <!-- End of .form-panel -->
                            
                        </div>

                    </div>
                </div><!-- End of "Data Card Area" -->

            </div>

        </div> <!-- End of .row -->

    </section> <!-- End of .section wrapper -->

</x-layout>