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
                                    <a href="{{ url('admin/book/create') }}">Add New Book</a>
                                </span>
                            </h5>
                            

                            @if( $models->count() > 0 )

                                <table class="table table-borderless align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Book Title</th>
                                            <th scope="col">Author</th>
                                            <th scope="col" class="text-center">Publisher</th>
                                            <th scope="col" class="tbl-category-col">Category</th>
                                            <th scope="col" class="text-center">Image</th>
                                            <th scope="col" class="text-center">Price</th>
                                            <th scope="col" class="text-center">Entry No</th>
                                            <th scope="col" class="text-center">Collection Date</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php($count = 1)

                                        @foreach( $models as $book )

                                            <tr>
                                                <th scope="row">
                                                    <a href="{{ url('view-book/' . $book->id) }}" target="_blank" title="View in Fronend">
                                                        {{ $count }}
                                                    </a>
                                                </th>
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
                                                
                                                <td class="text-center">
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

                                                <td class="text-center">
                                                    @if( $book->image != null )
                                                        <i class="bi bi-check-circle-fill text-success"></i>
                                                    @else
                                                        <i class="bi bi-clipboard-x text-danger"></i>
                                                    @endif
                                                </td>

                                                <td class="text-center">{{ convertEnToBnNumber($book->purchase_price ?? "-") }}</td>
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

                                <div class="my-5">
                                    {{ $models->links() }}
                                </div>

                            @else

                                <x-items-not-found/>

                            @endif

                        </div>

                    </div>
                </div><!-- End of "Data Card Area" -->

            </div>

        </div> <!-- End of .row -->

    </section> <!-- End of .section wrapper -->

</x-layout>