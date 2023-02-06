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
                                    <th>Title (In Bangla)</th>
                                    <td>{{ $model->title_bn }}</td>
                                </tr>
                                <tr>
                                    <th>Title (In English)</th>
                                    <td>{{ $model->title_en ?? "-" }}</td>
                                </tr>
                            </table>
                            
                            <a class="btn btn-sm btn-success" href="{{ url('admin/collection_method') }}">Back to All Collection Methods</a> &nbsp;
                            <a class="btn btn-sm btn-warning" href="{{ url('admin/collection_method/' . $model->id . '/edit') }}">Edit</a>

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