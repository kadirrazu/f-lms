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
                                    <a href="{{ url('admin/reading-list-add') }}">Add New Book in Reading List</a>
                                </span>
                            </h5>
                            

                            @if( $models->count() > 0 )

                                <table class="table table-borderless datatable align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Book Title</th>
                                            <th scope="col">Reader</th>
                                            <th scope="col" class="text-center">Start Date</th>
                                            <th scope="col" class="text-center">End Date</th>
                                            <th scope="col" class="text-center">Recommendation</th>
                                            <th scope="col" class="text-center">Comments</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php($count = 1)

                                        @foreach( $models as $item )
                                        <tr>
                                            <th scope="row">{{ $count }}</th>
                                            <td>{{ $item->book->title_bn }}</td>
                                            <td>{{ $item->user->name ?? '-' }}</td>
                                            <td class="text-center">
                                                {{ $item->start_date ?? '-' }}
                                            </td>
                                            <td class="text-center">
                                                {{ $item->end_date ?? '-' }}
                                            </td>
                                            <td class="text-center">
                                                @if( $item->reader_recommended == 0 )
                                                    <span class="badge bg-warning">Yet to Recommend</span>
                                                @elseif( $item->reader_recommended == 1 )
                                                    <span class="badge bg-success">Recommended</span>
                                                @else
                                                    <span class="badge bg-danger">Not Recommended</span>
                                                @endif
                                            </td>
                                            <td class="fst-italic text-center">
                                                @if( $item->comments != null )
                                                    <i class="bi bi-check-circle-fill text-success"></i>
                                                @else
                                                    <i class="bi bi-clipboard-x text-danger"></i>
                                                @endif
                                            </td>
                                            <td>

                                                <x-action-buttons model="reading-list" id="{{ $item->id }}"/>
                                                
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