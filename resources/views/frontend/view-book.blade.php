<x-layout-frontend>

<div class="row">

    <div class="col-12 text-center border-bottom pb-2">
        <span class="h5">বইয়ের বিস্তারিত তথ্য</span>
    </div>

    <div class="col-12 pt-2">
        
    @if( $book->count() > 0 )

    <div class="row">
        <div class="col-md-4 col-sm-12 mb-3">
            <div class="img-block-left mt-2 text-center">
                @if( $book->image != null )
                    <img src="{{ asset('/storage/' . $book->image) }}" alt="IMG" class="detail-thumb-img">
                @else
                    <img src="https://via.placeholder.com/150x180?text=No+Image" alt="IMG" class="detail-thumb-img">
                @endif
            </div>
        </div>
        <div class="col-md-8 col-sm-12 ps-5 border-start">
            <table class="table table-stripped">
                <tr>
                    <th>এন্ট্রি/ইনডেক্স নম্বর</th>
                    <td class="tbl-col-sep">
                        <span>{{ convertEnToBnNumber($book->entry_no) }}</span>
                    </td>
                </tr>
                <tr>
                    <th>সংগ্রহের তারিখ</th>
                    <td class="tbl-col-sep">
                        <span>{{ convertEnToBnNumber(date("d-m-Y", strtotime($book->entry_date))) }}</span>
                    </td>
                </tr>
                <tr>
                    <th>বইয়ের শিরোনাম</th>
                    <td class="tbl-col-sep">
                        <span>{{ $book->title_bn }}</span>
                    </td>
                </tr>
                <tr>
                    <th>লেখক</th>
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
                    <th>প্রকাশক</th>
                    <td class="tbl-col-sep">
                        <span>
                            <a href="{{ url('view-publisher/' . $book->publisher->id) }}">
                                {{ $book->publisher->title_bn }}
                            </a>
                        </span>
                    </td>
                </tr>
                <tr>
                    <th>ক্যাটাগরি/শ্রেণী/ধরণ</th>
                    <td class="tbl-col-sep">

                        @if(count($book->categories) > 0)

                        <span>

                            @foreach($book->categories as $category)
                                
                                <a href="{{ url('view-category/' . $category->id) }}">{{ $category->title_bn }}</a>{!! ($loop->count > 1 && !$loop->last) ? ',' : '' !!}

                            @endforeach

                        </span>

                        @else
                        -
                        @endif

                    </td>
                </tr>
                <tr>
                    <th>পৃষ্ঠা সংখ্যা</th>
                    <td class="tbl-col-sep">
                        <span>{{ convertEnToBnNumber($book->pages) }}</span>
                    </td>
                </tr>
                <tr>
                    <th>মুদ্রিত মূল্য</th>
                    <td class="tbl-col-sep">
                        <span>{{ convertEnToBnNumber($book->printed_price) }}</span>
                    </td>
                </tr>
                <tr>
                    <th>প্রকৃত ক্রয় মূল্য</th>
                    <td class="tbl-col-sep">
                        <span>{{ convertEnToBnNumber($book->purchase_price) }}</span>
                    </td>
                </tr>
                <tr>
                    <th>বর্তমান অবস্থা</th>
                    <td class="tbl-col-sep">
                        <span>{{ $book->state->title_bn }}</span>
                    </td>
                </tr>
                <tr>
                    <th>এডমিনের রেকমেন্ডেশন</th>
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
                    <th>এডমিনের নোটস্‌ / মন্তব্য</th>
                    <td class="tbl-col-sep">
                        <span>{{ $book->notes ?? '-' }}</span>
                    </td>
                </tr>
                <tr class="text-center">
                    @if(auth()->check())
                        <td colspan=2>
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bookRequestModal">
                                <i class="bi bi-bookmark-plus"></i>
                                বইটি পড়ার জন্য নিতে চান কি?
                            </button>
                            @php

                                $favCheckForBooks = \App\Models\Favourite::where('user_id', auth()->user()->id)->where('book_id', $book->id)->get();

                            @endphp

                            @if( count($favCheckForBooks) < 1 )
                                <a class="btn btn-light border border-success text-success" href="{{ url('add-favourite/' . $book->id) }}">
                                    <i class="bi bi-bookmark-heart"></i>
                                    বইটি পছন্দ তালিকায় যুক্ত করুন
                                </a>
                            @else
                            <button class="btn border border-info text-dark">
                                <i class="bi bi-bookmark-check"></i>
                                এই বইটি আপনার পছন্দ তালিকায় যুক্ত রয়েছে
                            </button>
                            @endif
                        </td>
                        <!-- Modal -->
                        <div class="modal modal-lg fade" id="bookRequestModal" tabindex="-1" aria-labelledby="bookRequestModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="bookRequestModalLabel">
                                        <span class="text-info">"{{ $book->title_bn }}"</span> - 
                                        বইটি পড়ার জন্য সংগ্রহের অনুরোধ ফরম -
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">অনুরোধকারীর নাম</label>
                                            <input class="form-control" type="text" name="name" value="{{ auth()->user()->name_bn ?? auth()->user()->name }}" disabled>
                                        </div>    
                                        <div class="mb-3">
                                            <label for="book_name" class="form-label">বইয়ের নাম</label>
                                            <input class="form-control" type="text" name="book_name" value="{{ $book->title_bn }}" disabled>
                                        </div>    
                                        <div class="mb-3">
                                            <label for="mobile_number" class="form-label">
                                                যোগাযোগের মোবাইল নম্বর
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" type="text" name="mobile_number" value="" placeholder="আপনার সাথে যোগাযোগের মোবাইল নম্বর">
                                        </div>    
                                        <div class="mb-3">
                                            <label for="address" class="form-label">
                                                কোন ঠিকানায় বইটি পেতে চান?
                                                <span class="text-danger">*</span>
                                            </label>
                                            <textarea class="form-control" name="address" id="address" rows="2"></textarea>
                                        </div>    
                                        <div class="mb-3">
                                            <label for="notes" class="form-label">
                                                আর কিছু বলতে চান কি?
                                            </label>
                                            <textarea class="form-control" name="notes" id="address" rows="2"></textarea>
                                        </div>

                                        <div class="border border-info px-4 py-3 mb-3">
                                            <span class="text-info text-decoration-underline">শর্তাবলীঃ</span><br>
                                            <span class="text-danger">১) বইটি আমি যত্নের সাথে ব্যবহার করবো।</span><br>
                                            <span class="text-danger">২) বইটি হাতে পাবার পর সর্বোচ্চ ২১ (একুশ) দিনের মধ্যে নিজ দায়িত্ত্বে ফেরৎ প্রদান করবো।</span>
                                        </div>

                                        <div class="form-check mb-3">
                                            <input class="form-check-input" name="terms" type="checkbox" value="1" id="termsCheckDefault">
                                            <label class="form-check-label" for="termsCheckDefault">
                                                আমি বইটি পাবার শর্তসমূহ পড়েছি এবং সবগুলো শর্তের ব্যাপারে সম্মত আছি।
                                            </label>
                                        </div>

                                        <button type="submit" class="btn btn-primary">অনুরোধ প্রেরণ করুন</button>
                                        
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <td colspan=2 class="login-notice">
                            <span class="text-success">আপনি কি এই বইটি পড়ার জন্য নিতে ইচ্ছুক?</span> অথবা <span class="text-primary">এই বইটি কি আপনার পছন্দ তালিকায় যুক্ত করতে চান?</span> তাহলে 
                            <a href="{{ url( 'login/?refferer=' . url()->full() ) }}" class="btn btn-sm btn-outline-success">লগইন করুন</a>
                        </td>
                    @endif
                </tr>
            </table>
        </div>
    </div>

    <div class="row book-comment-block">
        <div class="col-md-12 mb-2">
            <div class="h4 border-bottom pb-2">পাঠকের মন্তব্য</div>
        </div>
        <div class="col-md-12">
            @if( count($book->reads) > 0 )

                @php( $count = 1 )
                
                @foreach( $book->reads as $read )

                    <figure class="text-left">

                        <blockquote class="blockquote">

                            @if( $read->comments != null )
                                <p class="text-secondary">{{ convertEnToBnNumber($count) }}) {{ $read->comments ?? 'No comment texts were made by the reader!' }}</p>
                            @else
                                <p class="text-secondary">{{ convertEnToBnNumber($count) }}) No comments have been written by the reader!</p>
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
                                    <span class="badge border border-success text-success">দারুণ! রেকমেন্ডেড।</span>
                                @else
                                    <span class="badge border border-danger text-danger">রেকমেন্ডেড নয়।</span>
                                @endif
                            </cite>
                        </figcaption>
                    </figure>
                    @php( $count++ )

                @endforeach

            @else
                <p class="alert alert-info">
                    এখন পর্যন্ত এই বইটি পড়ে কোন পাঠক মন্তব্য করেননি।
                </p>
            @endif
        </div>
    </div>

    @else

        <div class="alert alert-danger">
            বইয়ের আইডি নম্বরটি সঠিক নয়!
        </div>

    @endif

    </div>
</div>

</x-layout-frontend>