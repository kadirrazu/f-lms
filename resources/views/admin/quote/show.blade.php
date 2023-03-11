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

                            <h5 class="card-title">{{ $page_subtitle ?? "" }} - <span>{{ ' ' . $model->title_bn ?? "" }}</span></h5>

                            @if( !empty($model) )

                            <table class="table table-bordered align-middle admin-table">
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $model->id }}</td>
                                </tr>
                                <tr>
                                    <th>Quote Text</th>
                                    <td>{{ $model->quote_text }}</td>
                                </tr>
                                <tr>
                                    <th>Quote By</th>
                                    <td>{{ $model->quote_by ?? "-" }}</td>
                                </tr>
                                <tr>
                                    <th>Quote From</th>
                                    <td>{{ $model->quote_from ?? "-" }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{!! $model->show == 1 ? '<span class="badge bg-success">Shown</span>' : '<span class="badge bg-danger">Hidden</span>' !!}</td>
                                </tr>
                            </table>
                            
                            <a class="btn btn-sm btn-success" href="{{ url('admin/quote') }}">Back to All Quotes</a> &nbsp;
                            <a class="btn btn-sm btn-warning" href="{{ url('admin/quote/' . $model->id . '/edit') }}">Edit</a>

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