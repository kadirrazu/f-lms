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
                            
                                <form class="row g-3" method="POST" action="{{ url('admin/reading-list/' . $model->id) }}">

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
                                    
                                    <!-- Start Date -->
                                    <div class="col-md-6 col-sm-12">
                                        <label for="start_date" class="form-label">Start Date</label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="start_date" type="date" :value="old('start_date', $model->start_date)"/>
                                        </div>

                                        <x-form.error name="start_date"/>
                                    </div>
                                    
                                    <!-- End Date -->
                                    <div class="col-md-6 col-sm-12">
                                        <label for="end_date" class="form-label">End Date</label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="end_date" type="date" :value="old('end_date', $model->end_date)" />
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
                                                        <input class="form-check-input" type="radio" name="reader_recommended" value="0" <?php echo old("reader_recommended", $model->reader_recommended) == 0 ? "checked" : "" ?>>
                                                        Yet to Recommend
                                                    </label>
                                                </div>
                                                <div class="form-check ms-5">
                                                    <label class="form-check-label">    
                                                        <input class="form-check-input" type="radio" name="reader_recommended" value="1" <?php echo old("reader_recommended", $model->reader_recommended) == 1 ? "checked" : "" ?>>
                                                        Recommended
                                                    </label>
                                                </div>
                                                <div class="form-check ms-5">
                                                    <label class="form-check-label">    
                                                        <input class="form-check-input" type="radio" name="reader_recommended" value="2" <?php echo old("reader_recommended", $model->reader_recommended) == 2 ? "checked" : "" ?>>
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
                                            <x-form.textarea name="comments">{{ old('comments', $model->comments) }}</x-form.textarea>
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

                                    <div class="col-md-12 col-sm-12">
                                        <p class="text-info m-0">Note: Fields marked with <x-form.field-required/> are required.</p>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
                                        <button class="btn btn-sm btn-warning w-auto" type="submit">Update</button> &nbsp;
                                        <a class="btn btn-sm btn-secondary" href="{{ url('admin/reading-list') }}">Back to Reading List</a>
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