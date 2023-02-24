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
                                    <th>Requester Name and ID</th>
                                    <td>{{ $model->user->name . ' (' . $model->user->id . ')' }}</td>
                                </tr>
                                <tr>
                                    <th>Mobile Number</th>
                                    <td>{{ $model->mobile }}</td>
                                </tr>
                                <tr>
                                    <th>Desired Delivery Address</th>
                                    <td>{{ $model->address ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Request Notes</th>
                                    <td>{{ $model->request_notes ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Terms Agreement</th>
                                    <td>
                                        @if( $model->terms_agreed == 1 )
                                            <span class="text-success fs-6 fw-bold">
                                                <i class="bi bi-check2-square me-1"></i>
                                                Yes
                                            </span>
                                        @else
                                            <span class="text-danger fs-6 fw-bold">
                                                <i class="bi bi-x-square me-1"></i>
                                                No
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Issue Status</th>
                                    <td>
                                        @if( $model->issued == 1 )
                                            <span class="text-success fs-6 fw-bold">
                                                <i class="bi bi-check2-square me-1"></i>
                                                Issued
                                            </span>
                                        @else
                                            <span class="text-danger fs-6 fw-bold">
                                                <i class="bi bi-x-square me-1"></i>
                                                Pending
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Issue Date</th>
                                    <td>{{ $model->issue_date ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Return Status</th>
                                    <td>
                                        @if( $model->returned == 0 )
                                            <span class="badge bg-info">Not Applicable</span>
                                        @elseif( $model->returned == 1 )
                                            <span class="badge bg-success">Returned</span>
                                        @elseif( $model->returned == 2 )
                                            <span class="badge bg-info">Pending</span>
                                        @else
                                            <span class="badge bg-danger">Not Set</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Return Date</th>
                                    <td>{{ $model->return_date ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Administrator Notes</th>
                                    <td>{{ $model->admin_notes ?? '-' }}</td>
                                </tr>
                            </table>
                            
                            <a class="btn btn-sm btn-success" href="{{ url('admin/request') }}">Back to Access Requests</a> &nbsp;
                            <a class="btn btn-sm btn-warning" href="{{ url('admin/request/' . $model->id . '/edit') }}">Edit Request</a>

                            @else

                                <p class="fw-semibold text-danger">No data were found for the targeted model.</p>

                            @endif

                        </div>

                    </div>
                </div><!-- End of "Data Card Area" -->

            </div>

        </div> <!-- End of .row -->

    </section> <!-- End of .section wrapper -->

</x-layout>