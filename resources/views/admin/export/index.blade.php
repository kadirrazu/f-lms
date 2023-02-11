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
                                Export Data
                            </h5>
                            

                            <div class="col-md-6 col-sm-12">

                                <ul class="list-unstyled">
                                    <li>
                                        <div class="alert alert-secondary">
                                            <span class="fs-5">Export Books Data to Excel</span>
                                            <hr>
                                           
                                            <div class="mt-4">
                                                <a class="btn btn-sm btn-success fs-6" href="{{ url('admin/export/excel') }}">
                                                    <i class="bi bi-filetype-xls"></i>&nbsp; 
                                                    Export Excel
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                            </div>

                        </div>

                    </div>
                </div><!-- End of "Data Card Area" -->

            </div>

        </div> <!-- End of .row -->

    </section> <!-- End of .section wrapper -->

</x-layout>