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
                                    <a href="{{ url('admin/request-list-add') }}">Add New Book in Request List</a>
                                </span>
                            </h5>
                            

                            @if( $models->count() > 0 )

                                <table class="table table-borderless datatable align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Book Title</th>
                                            <th scope="col">Requested By</th>
                                            <th scope="col" class="text-center">Contact Number</th>
                                            <th scope="col" class="text-center">Terms</th>
                                            <th scope="col" class="text-center">Issue</th>
                                            <th scope="col" class="text-center">Return</th>
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
                                                {{ $item->mobile ?? '-' }}
                                            </td>
                                            <td class="text-center">
                                                @if( $item->terms_agreed == 1 )
                                                    <span class="text-success fs-5 fw-bold">
                                                        <i class="bi bi-check2-square"></i>
                                                    </span>
                                                @else
                                                    <span class="text-danger fs-5 fw-bold">
                                                        <i class="bi bi-x-square"></i>
                                                    </span>
                                                @endif
                                            </td>
                                            
                                            <td class="text-center">
                                                @if( $item->issued == 1 )
                                                    <span class="text-success fs-5 fw-bold">
                                                        <i class="bi bi-check2-square"></i>
                                                    </span>
                                                @elseif( $item->issued == 2 )
                                                    <span class="text-danger fs-5 fw-bold">
                                                        <i class="bi bi-x-square"></i>
                                                    </span>
                                                @else
                                                    <span class="text-info fs-5 fw-bold">
                                                        <i class="bi bi-exclamation-triangle-fill"></i>
                                                    </span>
                                                @endif
                                            </td>

                                            <td class="text-center fs-6">
                                                @if( $item->returned == 0 )
                                                    <span class="badge bg-info">Not Applicable</span>
                                                @elseif( $item->returned == 1 )
                                                    <span class="badge bg-success">Returned</span>
                                                @elseif( $item->returned == 2 )
                                                    <span class="badge bg-info">Pending</span>
                                                @else
                                                    <span class="badge bg-danger">Not Set</span>
                                                @endif
                                            </td>
                                            <td>

                                                <x-action-buttons model="request" id="{{ $item->id }}"/>
                                                
                                            </td>
                                        </tr>

                                        @php($count++)

                                        @endforeach
                                    </tbody>
                                </table>

                            @else

                                <p class="alert alert-info">
                                    Currently there are no access requests logged into the system.
                                </p>

                            @endif

                        </div>

                    </div>
                </div><!-- End of "Data Card Area" -->

            </div>

        </div> <!-- End of .row -->

    </section> <!-- End of .section wrapper -->

</x-layout>