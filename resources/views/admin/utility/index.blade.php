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

                            <div class="row">
                            
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

                                </div> <!-- End of Card 01 -->

                                <div class="col-md-6 col-sm-12">

                                    <?php 
                                        $filesInResizedFolder = \Illuminate\Support\Facades\File::files( public_path( 'resized-images/thumbs-75' ) );

                                        $fileResizeCount = count($filesInResizedFolder)
                                    ?>

                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="alert alert-secondary">
                                                <span class="fs-5">Image Resize & Copy</span>
                                                <hr>
                                                <table class="table table-striped" style="max-width: 400px;">
                                                    <tr>
                                                        <td>Images in Storage Folder:</td>
                                                        <td>
                                                            <span class="fw-bold">{{ $folderImgCount }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Images in Resized Folder:</td>
                                                        <td>
                                                            <span class="fw-bold">{{ $fileResizeCount }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Images to Work on:</td>
                                                        <td>
                                                            <span class="fw-bold">{{ $folderImgCount - $fileResizeCount }}</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <div class="mt-4">
                                                    @if( ($folderImgCount - $fileResizeCount) > 0 )
                                                        <a class="btn btn-sm btn-warning fs-6" href="{{ url('admin/utility/resize-images') }}">
                                                            <i class="bi bi-aspect-ratio"></i>&nbsp; 
                                                            Resize & Copy Images
                                                        </a>
                                                    @else
                                                        <button class="btn btn-sm btn-info fs-6">
                                                            <i class="bi bi-check-all"></i>&nbsp;
                                                            Nothing to Resize & Copy
                                                        </button>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                </div> <!-- End of Card 02 -->

                                <div class="col-md-6 col-sm-12">

                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="alert alert-secondary">
                                                <span class="fs-5">Clean Cached Data</span>

                                                <hr>
                                                
                                                <div class="mt-4">
                                                    <a class="btn btn-sm btn-warning fs-6" href="{{ url('admin/utility/clean-cache') }}">
                                                        <i class="bi bi-aspect-ratio"></i>&nbsp; 
                                                        Flush Cache
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                </div> <!-- End of Card 03 -->

                            </div> <!-- End of Row -->

                        </div>

                    </div>
                </div><!-- End of "Data Card Area" -->

            </div>

        </div> <!-- End of .row -->

    </section> <!-- End of .section wrapper -->

</x-layout>