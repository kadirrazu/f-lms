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
                                    <a href="{{ url('admin/favourite-add') }}">Add New Book in Favourite List</a>
                                </span>
                            </h5>
                            

                            @if( $models->count() > 0 )

                                <table class="table table-borderless datatable align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Book Title</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">User / Reader</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php($count = 1)

                                        @foreach( $models as $item )
                                        <tr>
                                            <th scope="row">{{ $count }}</th>
                                            <td>{{ $item->book->title_bn }}</td>
                                            <td>
                                                @if(count($item->book->authors) > 0)

                                                    @foreach($item->book->authors as $author)

                                                        <a href="{{ url('admin/search-author/' . $author->id) }}">
                                                            {{ $author->title_bn }}
                                                        </a>

                                                        {!! ($loop->count > 1 && !$loop->last) ? '<br>' : '' !!}

                                                    @endforeach

                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>
                                                <p class="badge bg-success">Favourite</p>
                                            </td>
                                            <td>{{ $item->user->name ?? '-' }}</td>
                                            <td>

                                                <x-action-buttons model="favourite" id="{{ $item->id }}" :edit="false"/>
                                                
                                            </td>
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
                </div><!-- End of "Data Card Area" -->

            </div>

        </div> <!-- End of .row -->

    </section> <!-- End of .section wrapper -->

</x-layout>