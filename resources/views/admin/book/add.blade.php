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
                                    <a href="{{ url('admin/book') }}">All Books</a>
                                </span>
                            </h5>

                            <div class="form-panel" x-data="{ 
                                title_en : '<?php echo old('title_en', '') ?>',
                                publisherQuery : '', 
                                authorQuery : '', 
                                publishers : '',
                                authors : [],

                                searchUrl : '<?php echo url('/admin/publisher-search') ?>',
                                searchUrl2 : '<?php echo url('/admin/author-search') ?>',

                                async publisherQuerySubmit(){

                                    this.publishers = await(
                                        
                                        await fetch( this.searchUrl, {
                                            method : 'POST',
                                            headers : {
                                                'Content-type' : 'application/json',
                                                'X-CSRF-TOKEN' : document.querySelector('meta[name=csrf-token]').content,
                                            },
                                            body : JSON.stringify({ 
                                                query : this.publisherQuery 
                                            }),
                                        })).json();

                                }, 
                                async authorQuerySubmit(){

                                    this.authors = await(
                                        
                                        await fetch( this.searchUrl2, {
                                            method : 'POST',
                                            headers : {
                                                'Content-type' : 'application/json',
                                                'X-CSRF-TOKEN' : document.querySelector('meta[name=csrf-token]').content,
                                            },
                                            body : JSON.stringify({ 
                                                query : this.authorQuery 
                                            }),
                                        })).json();

                                }, 
                            }" >

                                <meta name="csrf-token" content="{{ csrf_token() }}">
                            
                                <form class="row g-3" method="POST" action="{{ url('admin/book') }}" enctype="multipart/form-data">

                                    @csrf

                                    <!-- Start of Input Fields -->

                                    <!-- Title (Bangla) -->
                                    <div class="col-md-6 col-sm-12">
                                        <label for="name" class="form-label">Title (Bangla) <x-form.field-required /></label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="title_bn" type="text" required />
                                        </div>

                                        <x-form.error name="title_bn"/>
                                    </div>

                                    <!-- Title (English) -->
                                    <div class="col-md-6 col-sm-12">
                                        <label for="name" class="form-label">Title (English)</label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="title_en" type="text" x-model="title_en"/>
                                        </div>

                                        <x-form.error name="title_en"/>
                                    </div>

                                    <!-- Slug -->
                                    <div class="col-md-6 col-sm-12">
                                        <label for="slug" class="form-label">Slug</label>
                                        <div class="input-group has-validation">
                                            <x-form.textarea name="slug" rows=1 x-text="title_en.toLowerCase().replaceAll(' ', '-')"/>
                                        </div>

                                        <x-form.error name="slug"/>
                                    </div>

                                    <!-- Publisher -->
                                    <div class="col-md-6 col-sm-12">
                                        <label class="form-label">Select Publisher <x-form.field-required/></label>
                                        <div class="input-group">

                                            <input class="form-control" type="text" x-model="publisherQuery" placeholder="Search Publisher" @input.debounce="publisherQuerySubmit">

                                            <select name="publisher_id" class="form-select" aria-label="Select Publisher">

                                                <option value="">Selec Publisher</option>

                                                <template x-for="publisher in publishers">
                                                    <option x-bind:value="publisher.id" x-text="publisher.title_bn"></option>
                                                </template>

                                            </select>

                                            <x-form.error name="publisher_id"/>

                                        </div>
                                    </div>

                                    <!-- Author -->
                                    <div class="col-md-6 col-sm-12">
                                        <label class="form-label">
                                            Select Author 
                                            <x-form.field-required/>
                                            <span class="text-info fst-italic d-block my-1">Hint: Type '+' to combine multiple search query in results.</span>
                                        </label>

                                        <input class="form-control mb-2" type="text" x-model="authorQuery" placeholder="Search Author" @input.debounce="authorQuerySubmit">

                                        <div class="input-group">

                                            <select name="author[]" class="form-select" aria-label="Select Author" multiple>

                                                <option value="">Selec Author(s)</option>

                                                <template x-for="author in authors">
                                                    <option x-bind:value="author.id" x-text="author.title_bn"></option>
                                                </template>

                                            </select>

                                            <x-form.error name="author[]"/>

                                        </div>
                                    </div>

                                    <!-- Category -->
                                    <div class="col-md-6 col-sm-12">
                                        <label class="form-label">Select Category <x-form.field-required/></label>
                                        <div class="input-group">

                                            <select name="category[]" class="form-select select2" aria-label="Select Category" multiple>

                                                <option value="">Selec Category</option>

                                                @foreach( \App\Models\Category::all() as $category )

                                                <option value="{{ $category->id }}" <?php echo in_array( $category->id, old("category") ?? [] ) ? "selected" : "" ?>>{{ $category->title_bn }}</option>

                                                @endforeach

                                            </select>

                                            <x-form.error name="category[]"/>

                                        </div>
                                    </div>

                                    <!-- Printed Price -->
                                    <div class="col-md-6 col-sm-12">
                                        <label for="printed_price" class="form-label">Printed Price</label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="printed_price" type="number" />
                                        </div>

                                        <x-form.error name="printed_price"/>
                                    </div>

                                    <!-- Purchase Price -->
                                    <div class="col-md-6 col-sm-12">
                                        <label for="purchase_price" class="form-label">Purchase Price</label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="purchase_price" type="number" />
                                        </div>

                                        <x-form.error name="purchase_price"/>
                                    </div>

                                    <!-- Pages -->
                                    <div class="col-md-6 col-sm-12">
                                        <label for="pages" class="form-label">Pages</label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="pages" type="number" />
                                        </div>

                                        <x-form.error name="pages"/>
                                    </div>

                                    <!-- Thumbnail Image -->
                                    <div class="col-md-6 col-sm-12">
                                        <label for="image" class="form-label">Thumbnail Image</label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="image" type="file" />
                                        </div>

                                        <x-form.error name="image"/>
                                    </div>

                                    <!-- Entry Number -->
                                    <div class="col-md-6 col-sm-12">
                                        <label for="entry_no" class="form-label">Entry / Index Number</label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="entry_no" type="number" value="{{ 
                                                old('entry_no') ?? count(\App\Models\Book::all()) + 1 
                                            }}"/>
                                        </div>

                                        <x-form.error name="entry_no"/>
                                    </div>

                                    <!-- Entry Date -->
                                    <div class="col-md-6 col-sm-12">
                                        <label for="entry_date" class="form-label">Entry / Index Date</label>
                                        <div class="input-group has-validation">
                                            <x-form.input name="entry_date" type="date" />
                                        </div>

                                        <x-form.error name="entry_date"/>
                                    </div>
                                    
                                    <!-- Collection Method -->
                                    <div class="col-md-6 col-sm-12">
                                        <label class="form-label">Collection Method <x-form.field-required/></label>
                                        <div class="input-group">

                                            <select name="collection_method_id" class="form-select" aria-label="Select Collection Method">

                                                <option value="">Selec Collection Method</option>

                                                @foreach( \App\Models\CollectionMethod::all() as $cm )

                                                <option value="{{ $cm->id }}" <?php echo old("collection_method_id", 1) == $cm->id ? "selected" : "" ?>>{{ $cm->title_bn }}</option>

                                                @endforeach

                                            </select>

                                            <x-form.error name="collection_method_id"/>

                                        </div>
                                    </div>
                                    
                                    <!-- Storage -->
                                    <div class="col-md-6 col-sm-12">
                                        <label class="form-label">Storage Location <x-form.field-required/></label>
                                        <div class="input-group">

                                            <select name="storage_id" class="form-select select2" aria-label="Select Storage Location">

                                                <option value="">Selec Storage Location</option>

                                                @foreach( \App\Models\Storage::all() as $storage )

                                                <option value="{{ $storage->id }}" <?php echo old("storage_id", 16) == $storage->id ? "selected" : "" ?>>{{ $storage->title_bn }}</option>

                                                @endforeach

                                            </select>

                                            <x-form.error name="storage_id"/>

                                        </div>
                                    </div>
                                    
                                    <!-- State/Status -->
                                    <div class="col-md-6 col-sm-12">
                                        <label class="form-label">Current State / Status <x-form.field-required/></label>
                                        <div class="input-group">

                                            <select name="state_id" class="form-select" aria-label="Select Storage Location">

                                                <option value="">Selec Storage Location</option>

                                                @foreach( \App\Models\State::all() as $state )

                                                <option value="{{ $state->id }}" <?php echo old("state_id", 1) == $state->id ? "selected" : "" ?>>{{ $state->title_bn }}</option>

                                                @endforeach

                                            </select>

                                            <x-form.error name="state_id"/>

                                        </div>
                                    </div>

                                    <!-- Recommendation -->
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset class="row mb-3">
                                            <legend class="col-form-label pt-0 mb-2">Recommendation</legend>
                                            <div class="input-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">    
                                                        <input class="form-check-input" type="radio" name="recommended" value="0" <?php echo old("recommended", 0) == 0 ? "checked" : "" ?>>
                                                        Not Yet Set
                                                    </label>
                                                </div>
                                                <div class="form-check ms-5">
                                                    <label class="form-check-label">    
                                                        <input class="form-check-input" type="radio" name="recommended" value="1" <?php echo old("recommended") == 1 ? "checked" : "" ?>>
                                                        Recommended
                                                    </label>
                                                </div>
                                                <div class="form-check ms-5">
                                                    <label class="form-check-label">    
                                                        <input class="form-check-input" type="radio" name="recommended" value="2" <?php echo old("recommended") == 2 ? "checked" : "" ?>>
                                                        Not Recommended
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>

                                    <!-- Notes -->
                                    <div class="col-md-6 col-sm-12">
                                        <label for="notes" class="form-label">Notes</label>
                                        <div class="input-group has-validation">
                                            <x-form.textarea name="notes" rows=3>{{  old('notes') }}</x-form.textarea>
                                        </div>

                                        <x-form.error name="notes"/>
                                    </div>

                                    <!-- End of Input Fields -->

                                    <div class="col-md-12 col-sm-12 mt-2">
                                        <p class="text-info m-0">Note: Fields marked with <x-form.field-required/> are required.</p>
                                    </div>

                                    <div class="col-md-12 col-sm-12 mt-3">
                                        <button class="btn btn-sm btn-primary w-auto" type="submit">Add Book</button> &nbsp;
                                        <a class="btn btn-sm btn-warning" href="{{ url('admin/book') }}">Back to All Books</a>
                                    </div>
                                    
                                </form>

                            </div> <!-- End of .form-panel -->
                            
                        </div>

                    </div>
                </div><!-- End of "Data Card Area" -->

            </div>

        </div> <!-- End of .row -->

    </section> <!-- End of .section wrapper -->

    <script src="https://res.cloudinary.com/dotvbcgs2/raw/upload/v1611869793/alpasearch.js"></script>

</x-layout>