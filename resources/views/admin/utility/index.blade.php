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
                                Utility / Maintenance
                            </h5>
                            

                            <div class="col-md-6 col-sm-12">

                                <ul class="list-unstyled">
                                    <li>
                                        <div class="alert alert-secondary">
                                            <span class="fs-5">Image Cleanup</span>
                                            <hr>
                                            <table class="table table-striped" style="max-width: 400px;">
                                                <tr>
                                                    <td>Images in Storage Folder:</td>
                                                    <td>
                                                        <span class="fw-bold">{{ $folderImgCount }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Images in Database Table:</td>
                                                    <td>
                                                        <span class="fw-bold">{{ $tableImageCount }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Extra Images:</td>
                                                    <td>
                                                        <span class="fw-bold">{{ $folderImgCount - $tableImageCount }}</span>
                                                    </td>
                                                </tr>
                                            </table>
                                            <div class="mt-4">
                                                @if( ($folderImgCount - $tableImageCount) > 0 )
                                                    <a class="btn btn-sm btn-danger fs-6" href="{{ url('admin/utility/delete-unused-images') }}">
                                                        <i class="bi bi-trash3"></i>&nbsp; 
                                                        Delete Unused Images
                                                    </a>
                                                @else
                                                    <button class="btn btn-sm btn-info fs-6">
                                                        <i class="bi bi-check-all"></i>&nbsp;
                                                        Nothing to Clean
                                                    </button>
                                                @endif
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