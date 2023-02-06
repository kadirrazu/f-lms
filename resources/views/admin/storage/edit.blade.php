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

                            <h5 class="card-title">{{ $page_subtitle ?? "" }} | <span>{{ ' ' . $model->title_bn ?? "" }}</span></h5>

                            @if( !empty($model) )

                            <div class="form-panel col-md-6 col-sm-12">
                            
                                <form class="row g-3" method="POST" action="{{ url('admin/storage/' . $model->id) }}">

                                    @csrf

                                    @method('PATCH')

                                    <div class="col-md-12 col-sm-12">

                                        <label for="title_bn" class="form-label">Title (In Bangla)<x-form.field-required/></label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="title_bn" type="text" :value="old('title_bn', $model->title_bn)" required />
                                        </div>

                                        <x-form.error name="title_bn"/>

                                    </div>

                                    <div class="col-md-12 col-sm-12">

                                        <label for="title_en" class="form-label">Title (In English)</label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="title_en" type="text" :value="old('title_en', $model->title_en)"/>
                                        </div>

                                        <x-form.error name="title_en"/>

                                    </div>

                                    <div class="col-md-6 col-sm-12 align-middle">
                                        <div class="row mb-3">
                                            <label class="col-sm-4 form-label">Select Status</label>
                                            <div class="col-sm-8">
                                                <select name="status" class="form-select" aria-label="Select Status">
                                                    <option value="1" <?php echo old("status", $model->status) == '1' ? "selected" : "" ?>>Active</option>
                                                    <option value="0" <?php echo old("status", $model->status) == '0' ? "selected" : "" ?>>Inactive</option>
                                                </select>

                                                <x-form.error name="status"/>

                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="col-md-12 col-sm-12">
                                        <p class="text-info m-0">Note: Fields marked with <x-form.field-required/> are required.</p>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
                                        <button class="btn btn-sm btn-warning w-auto" type="submit">Update</button> &nbsp;
                                        <a class="btn btn-sm btn-secondary" href="{{ url('admin/storage') }}">Back to All Storage</a>
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