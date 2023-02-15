<x-layout>

    <div class="pagetitle">
    <h1>Dashboard</h1>
    </div><!-- End Page Title -->

    @php

    $allBooks = \App\Models\Book::with('authors')->get();

    @endphp

    <section class="section dashboard">

        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
            <div class="row">

                <!-- Card Wrapper -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Books <span>| Total Number</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-book-half"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ count($allBooks) }}</h6>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Card -->
                </div><!-- Card Wrapper -->

                <!-- Card Wrapper -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Author <span>| Total Number</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ \App\Models\AuthorBook::select('author_id')->distinct()->get()->count() }}</h6>
                                </div>
                            </div>
                            
                        </div>
                    </div><!-- End Card -->
                </div><!-- Card Wrapper -->

                <!-- Card Wrapper -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Categories <span>| Topic Variations</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-tags"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ \App\Models\BookCategory::select('category_id')->distinct()->get()->count() }}</h6>
                                </div>
                            </div>
                            
                        </div>
                    </div><!-- End Card -->
                </div><!-- Card Wrapper -->

                <!-- Card Wrapper -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Purchase Cost <span>| Gross Amount</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-cash"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $allBooks->sum('purchase_price') }}</h6>
                                </div>
                            </div>
                            
                        </div>
                    </div><!-- End Card -->
                </div><!-- Card Wrapper -->

                <!-- Card Wrapper -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Pages <span>| All Pages in Collection</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-file-earmark-word"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $allBooks->sum('pages') }}</h6>
                                </div>
                            </div>
                            
                        </div>
                    </div><!-- End Card -->
                </div><!-- Card Wrapper -->

                <!-- Card Wrapper -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Recommendations <span>| By Admin</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-clipboard-check"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ \App\Models\Book::where('recommended', 1)->count() }}</h6>
                                </div>
                            </div>
                            
                        </div>
                    </div><!-- End Card -->
                </div><!-- Card Wrapper -->

                <!-- Recent Purchase -->
                <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                    <h5 class="card-title">Recent Purchase <span>| Last 10 Purchase</span></h5>

                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">Entry No</th>
                                <th scope="col" class="text-center">Collection Date</th>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Publisher</th>
                                <th scope="col" class="text-center">Purchase Price</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php

                                $books = \App\Models\Book::with('authors')->with('categories')->orderBy('entry_no', 'desc')->take(10)->get();

                            @endphp

                            @foreach( $books as $book )

                            <tr>
                                <td scope="col" class="text-center">
                                    <a href="{{ url( 'admin/book/' . $book->id ) }}">
                                        {{ convertEnToBnNumber( $book->entry_no ) }}
                                    </a>
                                </td>
                                <td scope="col" class="text-center">
                                    {{ convertEnToBnNumber( date("d-m-Y", strtotime($book->entry_date)) ) }}
                                </td>
                                <td scope="col">
                                    <a href="{{ url( 'admin/book/' . $book->id ) }}">
                                        {{ $book->title_bn }}
                                    </a>
                                </td>
                                <td scope="col">
                                    @if(count($book->authors) > 0)
                                        @foreach($book->authors as $author)
                                        <a href="{{ url('admin/search-author/' . $author->id) }}">
                                            {{ $author->title_bn }}
                                        </a>
                                        @endforeach
                                    @else
                                        -
                                    @endif
                                </td>
                                <td scope="col">
                                    <a href="{{ url('admin/search-publisher/' . $book->publisher->id) }}">
                                        {{ $book->publisher->title_bn }}
                                    </a>
                                </td>
                                <td scope="col" class="text-center">{{ convertEnToBnNumber( $book->purchase_price ) }}</td>
                            </tr>

                            @endforeach
                        
                        </tbody>
                    </table>

                    </div>

                </div>
                </div><!-- End Recent Purchase -->

            </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

            <!-- Recent Activity -->
            <div class="card">

                <div class="card-body">
                <h5 class="card-title">Recently Read <span>| Last 15 Books</span></h5>

                <div class="activity">

                    <?php

                        $reads = \App\Models\Read::orderBy('end_date', 'desc')->take(15)->get();

                    ?>

                    @if( $reads->count() > 0 )

                        @foreach( $reads as $read )

                        <div class="activity-item d-flex">
                            <div class="activite-label me-2">
                                {{ convertEnToBnNumber( date("d-m-Y", strtotime($read->end_date)) ) }}
                            </div>
                            <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                            <div class="activity-content ms-2">
                                <span class="text-primary">
                                    {{ $read->book->title_bn }}
                                </span>
                                <span class="fst-italic d-block" style="font-size: 12px;">
                                ({{ convertEnToBnNumber( date("d-m-Y", strtotime($read->start_date)) ) .' থেকে '. convertEnToBnNumber( date("d-m-Y", strtotime($read->end_date)) ) }})
                                </span>
                                <p class="text-start d-block badge text-info">
                                    <span style="color: #888;">by </span>
                                    <span class="fw-semibold">
                                        {{ $read->user->name_bn ?? $read->user->name }}
                                    </span>
                                </p>
                            </div>
                        </div><!-- End activity item-->

                        @endforeach

                    @else
                        <p class="fst-italic text-danger">Reading list is empty!</p>
                    @endif

                </div>

                </div>
            </div><!-- End Recent Activity -->

            </div><!-- End Right side columns -->

        </div> <!-- End of .row -->

    </section>

</x-layout>