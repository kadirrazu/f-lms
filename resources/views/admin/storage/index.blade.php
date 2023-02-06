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
                                    <a href="{{ url('admin/storage/create') }}">Add New Storage</a>
                                </span>
                            </h5>
                            

                            @if( $models->count() > 0 )

                                <table class="table table-borderless datatable align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name (Bangla)</th>
                                            <th scope="col">Name (English)</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php($count = 1)

                                        @foreach( $models as $item )
                                        <tr>
                                            <th scope="row">{{ $count }}</th>
                                            <td>{{ $item->title_bn }}</td>
                                            <td>{{ $item->title_en ?? '-' }}</td>
                                            <td>
                                                @if($item->status == 1 )
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>

                                                <x-action-buttons model="storage" id="{{ $item->id }}"/>
                                                
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