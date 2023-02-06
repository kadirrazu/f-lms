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
                                    <a href="{{ url('admin/state') }}">All States</a>
                                </span>
                            </h5>

                            <div class="form-panel col-md-6 col-sm-12">
                            
                                <form class="row g-3" method="POST" action="{{ url('admin/state') }}">

                                    @csrf

                                    <div class="col-md-12 col-sm-12">

                                        <label for="title_bn" class="form-label">Title (In Bangla)<x-form.field-required/></label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="title_bn" type="text" required/>
                                        </div>

                                        <x-form.error name="title_bn"/>

                                    </div>

                                    <div class="col-md-12 col-sm-12">

                                        <label for="title_en" class="form-label">Title (In English)</label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="title_en" type="text"/>
                                        </div>

                                        <x-form.error name="title_en"/>

                                    </div>

                                    <div class="col-6 col-sm-12">
                                        <p class="text-info m-0">Note: Fields marked with <x-form.field-required/> are required.</p>
                                    </div>

                                    <div class="col-md-12 col-sm-12 mt-3">
                                        <button class="btn btn-sm btn-primary w-auto" type="submit">Add State</button> &nbsp;
                                        <a class="btn btn-sm btn-warning" href="{{ url('admin/state') }}">Back to All States</a>
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