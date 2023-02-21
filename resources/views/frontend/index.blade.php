<x-layout-frontend>

<div class="row">
    <div class="col-md-12">

        <div class="search-wrapper position-relative mb-4" x-data="{ 
        
            searchQuery : '',
            books : '',
            showNothingInSearch : false,
            showResultInSearch : false,

            baseUrl : '<?php echo url('/') ?>',

            async searchQuerySubmit(){

            if(this.searchQuery.trim().length > 2){

                this.books = await(
                    
                    await fetch('/front-end/anything-search', {
                        method : 'POST',
                        headers : {
                            'Content-type' : 'application/json',
                            'X-CSRF-TOKEN' : document.querySelector('meta[name=csrf-token]').content,
                        },
                        body : JSON.stringify({ 
                            query : this.searchQuery 
                        }),
                    })).json();

                if(this.books.length < 1 ){
                    this.showNothingInSearch = true;
                    this.showResultInSearch = false;
                }
                else{
                    this.showNothingInSearch = false;
                    this.showResultInSearch = true;
                }

            }
            else
            {
                this.showNothingInSearch = false;
                this.showResultInSearch = false;
            }

            }, 

        }">

            <form method="POST" x-on:submit.prevent="">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="text" class="form-control" x-model="searchQuery" @input.debounce="searchQuerySubmit" placeholder="Search Here. Hints: Book Title, Author, Publisher etc.">
            </form>

            <div class="search-results position-absolute">
    
                <div class="positive-result bg-light p-2 border border-info rounded-bottom" x-show="showResultInSearch" style="display: none;">
                <ul class="m-0 list-unstyled p-2">
                    <template x-for="book in books">
                    <li>
                        <a x-bind:href=" baseUrl + '/view-book/' + book.id">
                            <template x-if="typeof(book.image) !== 'undefined'">
                                <div class="search-thumb-wrapper">
                                    <img x-bind:src=" baseUrl + '/resized-images/thumbs-150/' + book.image.replace('thumbnails/','')" alt="IMG" class="search-thumb-img">
                                </div>
                            </template>
                            <div class="search-info">
                                <span x-text="book.title_bn"></span>
                                <p class="fw-sm text-secondary">
                                    <template x-for="author in book.authors">
                                        <span x-text="author.title_bn"></span>
                                    </template>
                                    <span class="s-publisher text-info d-block">
                                    <template x-if="typeof(book.publisher) !== 'undefined'">
                                        <span class="fw-light" x-text="book.publisher.title_bn"></span>
                                    </template>
                                    </span>
                                </p>
                            </div>
                        </a>
                    </li>
                    </template>      
                </ul>
                </div>

                <p x-show="showNothingInSearch" class="nothing-result text-danger positive-result bg-light p-2 border border-dark rounded-bottom" style="display: none;">
                    Nothing found according to the query.
                </p>

            </div>

        </div>
        
    </div>
</div>

<div class="row mb-4">
    <div class="col-12 text-center">

        <figure class="text-center">
            <blockquote class="blockquote">
                <p>Books are mirrors: you only see in them what you already have inside you.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                Carlos Ruiz Zafón, <cite title="Source Title">The Shadow of the Wind</cite>
            </figcaption>
        </figure>

    </div>
</div>

<div class="row">

    <div class="col-12 text-center border-bottom pb-2">
        <span class="h5">List of Books</span>
    </div>

    <div class="col-12 pt-2">
        
    @if( $models->count() > 0 )

    <table class="table table-bordered align-middle">
        <thead>
            <tr class="align-middle">
                <th scope="col" class="text-center">Sr</th>
                <th scope="col">Image</th>
                <th scope="col">Book Title</th>
                <th scope="col">Author</th>
                <th scope="col" class="text-center">Publisher</th>
                <th scope="col" class="tbl-category-col">Category</th>
                <th scope="col" class="text-center">Entry No</th>
                <th scope="col" class="text-center">Collection Date</th>
            </tr>
        </thead>
        <tbody>

            @php( $count = ($models->perPage() * ($models->currentPage() - 1)) + 1 )

            @foreach( $models as $book )

                <tr class="align-middle">
                    <td class="text-center">{{ $count }}</td>
                    <td scope="row">
                        @if( $book->image != null )
                            <img src="{{ asset('/resized-images/thumbs-75/' . str_replace('thumbnails/', '', $book->image)) }}" alt="IMG" class="table-thumb-img">
                        @else
                            <img src="https://via.placeholder.com/75x80?text=No+Image" alt="IMG" class="table-thumb-img">
                        @endif
                    </td>
                    <td>
                        <a href="{{ url('view-book/' . $book->id) }}">
                            {{ $book->title_bn }}
                        </a>
                    </td>

                    <td>
                        @if(count($book->authors) > 0)

                            @foreach($book->authors as $author)

                                <a href="{{ url('admin/view-author/' . $author->id) }}">
                                    {{ $author->title_bn }}
                                </a>

                                {!! ($loop->count > 1 && !$loop->last) ? '<br>' : '' !!}

                            @endforeach

                        @else
                            -
                        @endif
                    </td>
                    
                    <td class="text-center">
                        <a href="{{ url('admin/view-publisher/' . $book->publisher->id) }}">
                            {{ $book->publisher->title_bn }}
                        </a>
                    </td>
                    
                    <td class="tbl-category-col">
                        @if(count($book->categories) > 0)

                            @foreach($book->categories as $category)

                                <a class="badge bg-secondary fw-light" href="{{ url('view-category/' . $category->id) }}">
                                    {{ $category->title_bn }}
                                </a>

                                {!! ($loop->count > 1 && !$loop->last) ? ' ' : '' !!}

                            @endforeach

                        @else
                            -
                        @endif
                    </td>
                    <td class="text-center">{{ convertEnToBnNumber($book->entry_no) }}</td>
                    <td class="text-center">{{ convertEnToBnNumber(date("d-m-Y", strtotime($book->entry_date))) }}</td>
                </tr>

            @php($count++)

            @endforeach
        </tbody>
    </table>

    <div class="my-5">
        {{ $models->links() }}
    </div>

    @else

    <x-items-not-found/>

    @endif

    </div>
</div>

</x-layout-frontend>