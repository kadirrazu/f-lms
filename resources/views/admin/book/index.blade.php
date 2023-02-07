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

                                <table class="table table-borderless datatable align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name (Bn)</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Publisher</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Collection Date</th>
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
                                                        @endforeach
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td>{{ $book->publisher->title_bn }}</td>
                                                <td>{{ convertEnToBnNumber($book->purchase_price ?? "-") }}</td>
                                                <td>{{ date("d-m-Y", strtotime($book->entry_date)) }}</td>
                                                <td>

                                                    <x-action-buttons model="book" id="{{ $book->id }}"/>
                                                    
                                                </td>
                                            </tr>

                                        @php($count++)

                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $models->links() }}

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