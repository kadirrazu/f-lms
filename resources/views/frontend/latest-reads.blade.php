<x-layout-frontend>

<div class="row">

    <div class="col-12 text-center border-bottom pb-2">
        <h5 class="h5">
            সর্বশেষ পঠিত বইসমূহের তালিকা
        </h5>
    </div>

</div>

<div class="row">

    <div class="col-12 pt-2">

    @php( $count = $reads->total() - $reads->firstItem() + 1 )
        
    @if( $reads->count() > 0 )

    <div class="table-responsive">

        <table class="table table-bordered align-middle">

            <tr class="text-center">
                <th>ক্রমিক</th>
                <th>ছবি, শিরোনাম ও অন্যান্য তথ্য</th> 
            </tr>

            @foreach( $reads as $read )

            <tr>
                <td class="text-center">{{ convertEnToBnNumber($count) }}</td>
                <td>

                    <table class="lreads-table">
                        <tr>
                            <td class="text-center px-3">

                                <a href="{{ url('view-book/' . $read->book->id) }}" title="Book Details">
                                    @if( $read->book->image != null )
                                        <img src="{{ asset('/resized-images/thumbs-75/' . str_replace('thumbnails/', '', $read->book->image)) }}" alt="IMG" class="table-thumb-img">
                                    @else
                                        <img src="https://via.placeholder.com/75x80?text=No+Image" alt="IMG" class="table-thumb-img">
                                    @endif
                                </a>

                                <span class="text-center d-block mt-2">
                                    <a href="{{ url('view-book/' . $read->book->id) }}" title="Book Details">
                                        {{ $read->book->title_bn }}
                                    </a>
                                </span>

                                <span class="text-center d-block mt-2">
                                    {{ convertEnToBnNumber(date("d-m-Y", strtotime($read->end_date))) }}
                                </span>

                            </td>
                            <td>
                                <figure class="text-left">

                                    <blockquote class="blockquote fs-6">

                                        <p></p>

                                        @if( $read->comments != null )
                                            <p class="text-secondary">
                                                <span class="d-block text-decoration-underline mb-1">পাঠকের মন্তব্যঃ</span>
                                                {{ $read->comments ?? 'No comments have been written by the reader!' }}
                                            </p>
                                        @else
                                            <span class="d-block text-decoration-underline mb-1">পাঠকের মন্তব্যঃ</span>
                                            <p class="text-secondary">No comments have been written by the reader!</p>
                                        @endif

                                    </blockquote>

                                    <figcaption class="blockquote-footer ms-3 mt-1">
                                        <span>পাঠকঃ</span>
                                        {{ $read->user->name_bn ?? $read->user->name }} 
                                        <cite>
                                            @ {{ convertEnToBnNumber(date("d-m-Y H:i:s", strtotime($read->created_at))) }}
                                        </cite>
                                    </figcaption>

                                    <figcaption class="blockquote-footer ms-3">
                                        <span>পড়ার তারিখঃ</span>  
                                        <cite>
                                            {{ convertEnToBnNumber(date("d-m-Y", strtotime($read->start_date))) }}
                                            থেকে {{ convertEnToBnNumber(date("d-m-Y", strtotime($read->end_date))) }}
                                        </cite>
                                    </figcaption>

                                    <figcaption class="blockquote-footer ms-3">
                                        <span>রেকমেন্ডেশনঃ</span>  
                                        <cite>
                                            @if($read->reader_recommended == 0)
                                                <span class="badge border border-warning text-secondary">রেকমেন্ডেশন প্রদান করা হয়নি</span>
                                            @elseif($read->reader_recommended == 1)
                                                <span class="badge border border-success text-success">রেকমেন্ডেড।</span>
                                            @else
                                                <span class="badge border border-danger text-danger">রেকমেন্ডেড নয়।</span>
                                            @endif
                                        </cite>
                                    </figcaption>
                                </figure>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

                @php( $count-- )

            @endforeach

        </table>

    </div>

    <div class="my-5">
        {{ $reads->links() }}
    </div>

    @else

        <p>এই তালিকায় কোন বই পাওয়া যায়নি।</p>

    @endif

    </div>
</div>

</x-layout-frontend>