<x-layout-frontend>

<div class="row">

    <div class="col-12 text-center border-bottom pb-2">
        <span class="h5">Books Details</span>
    </div>

    <div class="col-12 pt-2">
        
    @if( $book->count() > 0 )

    <div class="row">
        <div class="col-md-4">
            @if( $book->image != null )
                <img src="{{ asset('/storage/' . $book->image) }}" alt="IMG" class="detail-thumb-img">
            @else
                <img src="https://via.placeholder.com/150x180?text=No+Image" alt="IMG" class="detail-thumb-img">
            @endif
        </div>
        <div class="col-md-8 ps-5 border-start">
            <table class="table table-stripped">
                <tr>
                    <th>Entry Number</th>
                    <td class="tbl-col-sep">
                        <span>{{ convertEnToBnNumber($book->entry_no) }}</span>
                    </td>
                </tr>
                <tr>
                    <th>Collection Date</th>
                    <td class="tbl-col-sep">
                        <span>{{ convertEnToBnNumber(date("d-m-Y", strtotime($book->entry_date))) }}</span>
                    </td>
                </tr>
                <tr>
                    <th>Book Title</th>
                    <td class="tbl-col-sep">
                        <span>{{ $book->title_bn }}</span>
                    </td>
                </tr>
                <tr>
                    <th>Author</th>
                    <td class="tbl-col-sep">
                        @if(count($book->authors) > 0)

                        @foreach($book->authors as $author)

                            <span>
                                <a href="{{ url('view-author/' . $author->id) }}">
                                    {{ $author->title_bn }}
                                </a>
                            </span>

                            {!! ($loop->count > 1 && !$loop->last) ? '<br>' : '' !!}

                        @endforeach

                        @else
                        -
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Publisher</th>
                    <td class="tbl-col-sep">
                        <span>
                            <a href="{{ url('view-publisher/' . $book->publisher->id) }}">
                                {{ $book->publisher->title_bn }}
                            </a>
                        </span>
                    </td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td class="tbl-col-sep">

                        @if(count($book->categories) > 0)

                        <span>

                            @foreach($book->categories as $category)
                                
                                <a href="{{ url('view-author/' . $category->id) }}">{{ $category->title_bn }}</a>
                                
                                {!! ($loop->count > 1 && !$loop->last) ? ', ' : '' !!}

                            @endforeach

                        </span>

                        @else
                        -
                        @endif

                    </td>
                </tr>
                <tr>
                    <th>Number of Pages</th>
                    <td class="tbl-col-sep">
                        <span>{{ convertEnToBnNumber($book->pages) }}</span>
                    </td>
                </tr>
                <tr>
                    <th>Printed Price</th>
                    <td class="tbl-col-sep">
                        <span>{{ convertEnToBnNumber($book->printed_price) }}</span>
                    </td>
                </tr>
                <tr>
                    <th>Purchase Price</th>
                    <td class="tbl-col-sep">
                        <span>{{ convertEnToBnNumber($book->purchase_price) }}</span>
                    </td>
                </tr>
                <tr>
                    <th>Current Status</th>
                    <td class="tbl-col-sep">
                        <span>{{ $book->state->title_bn }}</span>
                    </td>
                </tr>
                <tr>
                    <th>Admin Recommendation</th>
                    <td class="tbl-col-sep">
                        <span>
                            @if($book->recommended == 0)
                                <span class="badge bg-warning custom-badge">Not Yet Set</span>
                            @elseif($book->recommended == 1)
                                <span class="badge bg-success custom-badge">Recommended</span>
                            @else
                                <span class="badge bg-danger custom-badge">Not Recommended</span>
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <th>Admin Notes</th>
                    <td class="tbl-col-sep">
                        <span>{{ $book->notes ?? '-' }}</span>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row book-comment-block">
        <div class="col-md-12 mb-2">
            <div class="h4 border-bottom pb-2">Reader Comments</div>
        </div>
        <div class="col-md-12">
            @if( count($book->reads) > 0 )

                @php( $count = 1 )
                
                @foreach( $book->reads as $read )

                    <figure class="text-left">
                        <blockquote class="blockquote">
                            <p>{{ convertEnToBnNumber($count) }}) {{ $read->comments }}</p>
                        </blockquote>
                        <figcaption class="blockquote-footer ms-3 mt-1">
                            পাঠকঃ {{ \App\Models\User::find($read->user_id)->get()->first()->name }} <cite title="Source Title">@ {{ convertEnToBnNumber(date("d-m-Y H:i:s", strtotime($read->created_at))) }}</cite>
                        </figcaption>
                        
                        <figcaption class="blockquote-footer ms-3">
                            পড়ার তারিখ:  
                            <cite title="Source Title">
                                {{ convertEnToBnNumber(date("d-m-Y", strtotime($read->start_date))) }}
                                থেকে {{ convertEnToBnNumber(date("d-m-Y", strtotime($read->end_date))) }}
                            </cite>
                        </figcaption>
                    </figure>
                    @php( $count++ )

                @endforeach

            @else
                <p class="alert alert-info">
                    No comments made yet on this books!
                </p>
            @endif
        </div>
    </div>

    @else

        <div class="alert alert-danger">
            Invalid Books ID.
        </div>

    @endif

    </div>
</div>

</x-layout-frontend>