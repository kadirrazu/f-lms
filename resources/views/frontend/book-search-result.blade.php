<x-layout-frontend>

<div class="row">

    <div class="col-12 text-center border-bottom pb-2">
        <h5 class="h5">
            বইয়ের তালিকা
            <span class="text-info">{{ '<'. $title . '>' }}</span>
            <span class="text-warning">{{ '<'. $type . '>' }}</span>
        </h5>
    </div>

    <div class="col-12 pt-2">
        
    @if( $books->count() > 0 )

    <div class="table-responsive">

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

                @php( $count = ($books->perPage() * ($books->currentPage() - 1)) + 1 )

                @foreach( $books as $book )

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

    </div>

    <div class="my-5">
        {{ $books->links() }}
    </div>

    @else

        <p class="alert alert-info text-danger fw-strong p-3 text-center mt-3">
            দুঃখিত, আপনার কোয়েরী/কী-ওয়ার্ড অনুসারে কোন বই খুজে পাওয়া যায়নি। আবার চেষ্টা করুন।
        </p>

    @endif

    </div>
</div>

</x-layout-frontend>