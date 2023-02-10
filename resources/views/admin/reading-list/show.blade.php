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

                            <h5 class="card-title">{{ $page_subtitle ?? "" }} - <span>{{ ' ' . $model->book->title_bn ?? "" }}</span></h5>

                            @if( !empty($model) )

                            <table class="table table-bordered align-middle admin-table">
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $model->id }}</td>
                                </tr>
                                <tr>
                                    <th>Book Title and ID</th>
                                    <td>{{ $model->book->title_bn . ' (' . $model->book->id . ')' }}</td>
                                </tr>
                                <tr>
                                    <th>Reader Name and ID</th>
                                    <td>{{ $model->user->name . ' (' . $model->user->id . ')' }}</td>
                                </tr>
                                <tr>
                                    <th>Reading Start Date</th>
                                    <td>{{ $model->start_date ?? "-" }}</td>
                                </tr>
                                <tr>
                                    <th>Reading End Date</th>
                                    <td>{{ $model->end_date ?? "-" }}</td>
                                </tr>
                                <tr>
                                    <th>Comments</th>
                                    <td>
                                        @if( $model->reader_recommended == 0 )
                                            <span class="badge bg-warning">Yet to Recommend</span>
                                        @elseif( $model->reader_recommended == 1 )
                                            <span class="badge bg-success">Recommended</span>
                                        @else
                                            <span class="badge bg-danger">Not Recommended</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Reader Comments</th>
                                    <td>{{ $model->comments ?? "-" }}</td>
                                </tr>
                            </table>
                            
                            <a class="btn btn-sm btn-success" href="{{ url('admin/reading-list') }}">Back to Reading List</a> &nbsp;
                            <a class="btn btn-sm btn-warning" href="{{ url('admin/reading-list/' . $model->id . '/edit') }}">Edit</a>

                            @else

                                <p class="fw-semibold text-danger">No data were found for the targeted user.</p>

                            @endif

                        </div>

                    </div>
                </div><!-- End of "Data Card Area" -->

            </div>

        </div> <!-- End of .row -->

    </section> <!-- End of .section wrapper -->

</x-layout>