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
                <input type="text" class="form-control border border-info" x-model="searchQuery" @input.debounce="searchQuerySubmit" placeholder="বই খুজে পেতে এখানে সার্চ করুন। কী-ওয়ার্ডঃ বইয়ের নাম, লেখক, প্রকাশক ইত্যাদি...">
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
                    দুঃখিত, আপনার প্রদত্ত কী-ওয়ার্ড অনুসারে কোন বই খুজে পাওয়া যায়নি!
                </p>

            </div>

        </div>
        
    </div>
</div>

<div class="row mb-4">

    <div class="col-12 text-center">

        @if(count($quotes) > 0)

        <div id="QuoteCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($quotes as $quote)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                    <figure class="text-center">
                        <blockquote class="blockquote">
                            <p>{{ $quote->quote_text }}</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            {{ $quote->quote_by }} 
                            @if( $quote->quote_from != null ), <cite title="Source Title">{{ $quote->quote_from }}</cite>@endif
                        </figcaption>
                    </figure>

                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#QuoteCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#QuoteCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        @else

            <figure class="text-center">
                <blockquote class="blockquote">
                    <p>Books are mirrors: you only see in them what you already have inside you.</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    Carlos Ruiz Zafón, <cite title="Source Title">The Shadow of the Wind</cite>
                </figcaption>
            </figure>

        @endif

    </div>

</div>

<div class="row">

    <div class="col-12 text-center border-bottom pb-2">
        <span class="h5">সকল বইয়ের তালিকা</span>
    </div>

    <div class="col-12 pt-2 table-responsive">
        
    @if( $books->count() > 0 )

        <table class="table table-bordered align-middle filter-table">
            <thead>
                <tr class="align-middle tbl-header-row">
                    <th scope="col" class="text-center">ক্রমিক</th>
                    <th scope="col" class="text-center">ছবি</th>
                    <th scope="col" class="text-center">বইয়ের শিরোনাম</th>
                    <th scope="col" class="text-center">লেখক</th>
                    <th scope="col" class="text-center">প্রকাশক</th>
                    <th scope="col" class="tbl-category-col text-center">ক্যাটাগরী/ধরণ</th>
                    <th scope="col" class="text-center tbl-entry-col">এন্ট্রি নম্বর</th>
                    <th scope="col" class="text-center tbl-entry-date-col">সংগ্রহের তারিখ</th>
                </tr>
            </thead>
            <tbody>

                @php( $count = ($books->perPage() * ($books->currentPage() - 1)) + 1 )

                @foreach( $books as $book )

                    <tr class="align-middle">
                        <td class="text-center">{{ convertEnToBnNumber($count) }}</td>
                        <td scope="row" class="text-center">
                            <a href="{{ url('view-book/' . $book->id) }}" title="Book Details">
                                @if( $book->image != null )
                                    <img src="{{ asset('/resized-images/thumbs-75/' . str_replace('thumbnails/', '', $book->image)) }}" alt="IMG" class="table-thumb-img">
                                @else
                                    <img src="https://via.placeholder.com/75x80?text=No+Image" alt="IMG" class="table-thumb-img">
                                @endif
                            </a>
                        </td>
                        <td>
                            <a href="{{ url('view-book/' . $book->id) }}" title="Book Details">
                                {{ $book->title_bn }}
                            </a>
                        </td>

                        <td>
                            @if(count($book->authors) > 0)

                                @foreach($book->authors as $author)

                                    <a href="{{ url('view-author/' . $author->id) }}">
                                        {{ $author->title_bn }}
                                    </a>

                                    {!! ($loop->count > 1 && !$loop->last) ? '<br>' : '' !!}

                                @endforeach

                            @else
                                -
                            @endif
                        </td>
                        
                        <td class="text-center">
                            <a href="{{ url('view-publisher/' . $book->publisher->id) }}">
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

    </div>

    <div class="my-5 pagination-holder">
        {{ $books->links() }}
    </div>

    @else

    <x-items-not-found/>

    @endif
    
</div>

</x-layout-frontend>