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
                                    <a href="{{ url('admin/quote/create') }}">Add New Quote</a>
                                </span>
                            </h5>
                            

                            @if( $models->count() > 0 )

                                <table class="table table-borderless datatable align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Quote Text</th>
                                            <th scope="col" class="text-center">Quote By</th>
                                            <th scope="col" class="text-center">Status</th>
                                            <th scope="col" class="text-center">Created On</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php($count = 1)

                                        @foreach( $models as $item )
                                        <tr>
                                            <th scope="row">{{ $count }}</th>
                                            <td>
                                                {{ $item->quote_text }}
                                            </td>
                                            <td class="text-center">
                                                {{ $item->quote_by }}
                                            </td>
                                            <td class="text-center">
                                                @if($item->show == 1 )
                                                    <span class="badge bg-success">Shown</span>
                                                @else
                                                    <span class="badge bg-danger">Hidden</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                {{ $item->created_at }}
                                            </td>
                                            <td>

                                                <x-action-buttons model="quote" id="{{ $item->id }}"/>
                                                
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