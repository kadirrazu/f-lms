<x-layout-frontend>

<div class="row">

    <div class="col-12 text-center border-bottom pb-2">
        <h5 class="h5">
            বইয়ের সংগ্রহ সংক্রান্ত কিছু ফ্যাক্টস্‌
        </h5>
    </div>

    <!-- Card -->
    <div class="col-md-4 col-sm-12">
        <div class="card info-card sales-card text-center">
            <div class="card-body">

                <div class="card-icon rounded-circle mx-auto">
                    <i class="bi bi-book-half"></i>
                </div>

                <h5 class="card-title border-bottom">সংগৃহীত বইয়ের সংখ্যা</span></h5>

                <div class="mx-auto">
                    <div class="py-3">
                        <h6>{{ convertEnToBnNumber($books->count()) }}</h6> 
                        <span class="card-extra-info">{{ convertEnToBnNumber(date('d-m-Y')) }} পর্যন্ত</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End of Card -->

    <!-- Card -->
    <div class="col-md-4 col-sm-12">
        <div class="card info-card sales-card text-center">
            <div class="card-body">

                <div class="card-icon rounded-circle mx-auto">
                    <i class="bi bi-person-check-fill"></i>
                </div>

                <h5 class="card-title border-bottom">সর্বমোট লেখক সংখ্যা</span></h5>

                <div class="mx-auto">
                    <div class="py-3">
                        <h6>{{ convertEnToBnNumber(\App\Models\AuthorBook::select('author_id')->distinct()->get()->count()) }}</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End of Card -->

    <!-- Card -->
    <div class="col-md-4 col-sm-12">
        <div class="card info-card sales-card text-center">
            <div class="card-body">

                <div class="card-icon rounded-circle mx-auto">
                    <i class="bi bi-journal-check"></i>
                </div>

                <h5 class="card-title border-bottom">সর্বমোট প্রকাশক সংখ্যা</span></h5>

                <div class="mx-auto">
                    <div class="py-3">
                        <h6>{{ convertEnToBnNumber($books->groupBy('publisher_id')->count()) }}</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End of Card -->

    <!-- Card -->
    <div class="col-md-4 col-sm-12">
        <div class="card info-card sales-card text-center">
            <div class="card-body">

                <div class="card-icon rounded-circle mx-auto">
                    <i class="bi bi-journals"></i>
                </div>

                <h5 class="card-title border-bottom">সর্বমোট পৃষ্ঠা সংখ্যা</span></h5>

                <div class="mx-auto">
                    <div class="py-3">
                        <h6>{{ convertEnToBnNumber($books->sum('pages')) }}</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End of Card -->

    <!-- Card -->
    <div class="col-md-4 col-sm-12">
        <div class="card info-card sales-card text-center">
            <div class="card-body">

                <div class="card-icon rounded-circle mx-auto">
                    <i class="bi bi-cash-stack"></i>
                </div>

                <h5 class="card-title border-bottom">বইয়ের মোট মুদ্রিত মূল্য</span></h5>

                <div class="mx-auto">
                    <div class="py-3">
                        <h6>{{ convertEnToBnNumber($books->sum('printed_price')) }}/-</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End of Card -->

    <!-- Card -->
    <div class="col-md-4 col-sm-12">
        <div class="card info-card sales-card text-center">
            <div class="card-body">

                <div class="card-icon rounded-circle mx-auto">
                    <i class="bi bi-cash-coin"></i>
                </div>

                <h5 class="card-title border-bottom">বইয়ের প্রকৃত সংগ্রহমূল্য</span></h5>

                <div class="mx-auto">
                    <div class="py-3">
                        <h6>{{ convertEnToBnNumber($books->sum('purchase_price')) }}/-</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End of Card -->

</div>

<p class="border-top p-3 mt-3"></p>

<div class="row">

    <div class="col-12 text-center border-bottom pb-2">
        <h5 class="h5">
            সর্বশেষ সংগৃহীত ০৫ টি বইয়ের তালিকা
        </h5>
    </div>

    <div class="col-12 pt-2">

    @php( $count = 1 )
        
    @if( $books->count() > 0 )

    <table class="table table-bordered align-middle">
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

            @foreach( $books->take(5) as $book )

                <tr class="align-middle">
                    <td class="text-center">{{ convertEnToBnNumber($count) }}</td>
                    <td scope="row">
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

    @else

    <x-items-not-found/>

    @endif

    </div>
</div>

</x-layout-frontend>