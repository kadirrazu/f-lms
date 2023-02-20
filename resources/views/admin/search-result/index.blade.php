<x-layout>

    <div class="pagetitle">
        <h1>Search Results</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard db-work-area">

        <div class="row">

            <div class="col-md-12">

                <!-- Data Card Area -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">

                            <h5 class="card-title fw-normal">
                                Search Results for 
                                <span class="fw-bolder text-info text-decoration-underline">{{ '< ' . $key->title_bn . ' >' }}</span> in type
                                <span class="fw-bolder text-danger text-decoration-underline">{{ '<' }} {{ $key_type ?? '' }} {{ '>' }}</span>
                            </h5>                            

                            @if( $models->count() > 0 )

                                <table class="table table-borderless datatable align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Book Title</th>
                                            <th scope="col">Author</th>
                                            <th scope="col" class="text-start">Publisher</th>
                                            <th scope="col" class="tbl-category-col">Category</th>
                                            <th scope="col" class="text-center">Entry No</th>
                                            <th scope="col" class="text-center">Collection Date</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php($count = 1)

                                        @foreach( $models as $book )

                                            <tr>
                                                <th scope="row">{{ $count }}</th>
                                                <td>
                                                    <a href="{{ url('admin/book/' . $book->id) }}">
                                                        {{ $book->title_bn }}
                                                    </a>
                                                </td>
                                                <td>
                                                    @if(count($book->authors) > 0)

                                                        @foreach($book->authors as $author)

                                                        <a href="{{ url('admin/search-author/' . $author->id) }}">
                                                            {{ $author->title_bn }}
                                                        </a>

                                                        {!! ($loop->count > 1 && !$loop->last) ? '<br>' : '' !!}

                                                        @endforeach

                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                
                                                <td class="text-start">
                                                    <a href="{{ url('admin/search-publisher/' . $book->publisher->id) }}">
                                                        {{ $book->publisher->title_bn }}
                                                    </a>
                                                </td>
                                                
                                                <td class="tbl-category-col">
                                                    @if(count($book->categories) > 0)

                                                        @foreach($book->categories as $category)

                                                            <a class="badge bg-secondary fw-light" href="{{ url('admin/search-category/' . $category->id) }}">
                                                                {{ $category->title_bn }}
                                                            </a>

                                                            {!! ($loop->count > 1 && !$loop->last) ? ' ' : '' !!}

                                                        @endforeach

                                                    @else
                                                        -
                                                    @endif
                                                </td>

                                                <td class="text-center">{{ convertEnToBnNumber($book->entry_no) }}</td>
                                                <td class="text-center">{{ date("d-m-Y", strtotime($book->entry_date)) }}</td>

                                                <td>

                                                    <x-action-buttons model="book" id="{{ $book->id }}"/>
                                                    
                                                </td>
                                            </tr>

                                        @php($count++)

                                        @endforeach
                                    </tbody>
                                </table>

                            @else

                                <div class="alert alert-danger">
                                    No items found according to the search query.
                                </div>

                            @endif

                        </div>

                    </div>
                </div><!-- End of "Data Card Area" -->

            </div>

        </div> <!-- End of .row -->

    </section> <!-- End of .section wrapper -->

</x-layout>