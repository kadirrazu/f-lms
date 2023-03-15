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

                            <h5 class="card-title">{{ $page_subtitle ?? "" }} | <span>{{ ' ' . $model->id ?? "" }}</span></h5>

                            @if( !empty($model) )

                            <div class="form-panel col-md-6 col-sm-12">
                            
                                <form class="row g-3" method="POST" action="{{ url('admin/quote/' . $model->id) }}">

                                    @csrf

                                    @method('PATCH')

                                    <div class="col-md-12 col-sm-12">

                                        <label for="quote_text" class="form-label">Quote Text<x-form.field-required/></label>
                                        <div class="input-group has-validation">
                                            <x-form.textarea name="quote_text" rows=3 required>{{  old('quote_text', $model->quote_text) }}</x-form.textarea>
                                        </div>

                                        <x-form.error name="quote_text"/>

                                    </div>

                                    <div class="col-md-12 col-sm-12">

                                        <label for="quote_by" class="form-label">Quote By<x-form.field-required/></label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="quote_by" type="text" :value="old('quote_by', $model->quote_by)" required/>
                                        </div>

                                        <x-form.error name="quote_by"/>

                                    </div>

                                    <div class="col-md-12 col-sm-12">

                                        <label for="quote_from" class="form-label">Quote By</label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="quote_from" type="text" :value="old('quote_from', $model->quote_from)"/>
                                        </div>

                                        <x-form.error name="quote_from"/>

                                    </div>

                                    <div class="col-md-6 col-sm-12 align-middle">
                                        <div class="row mb-3">
                                            <label class="col-sm-4 form-label">Select Status</label>
                                            <div class="col-sm-8">
                                                <select name="show" class="form-select" aria-label="Select Status">
                                                    <option value="1" <?php echo old("show", $model->show) == '1' ? "selected" : "" ?>>Show</option>
                                                    <option value="0" <?php echo old("show", $model->show) == '0' ? "selected" : "" ?>>Hide</option>
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
                                        <a class="btn btn-sm btn-secondary" href="{{ url('admin/quote') }}">Back to All Quotes</a>
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