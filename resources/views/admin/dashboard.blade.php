<x-layout>

    <div class="pagetitle">
    <h1>Dashboard</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
            <div class="row">

                <!-- Card Wrapper -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Books <span>| Total Number</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-book-half"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>145</h6>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Card -->
                </div><!-- Card Wrapper -->

                <!-- Card Wrapper -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Author <span>| Total Number</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>145</h6>
                                </div>
                            </div>
                            
                        </div>
                    </div><!-- End Card -->
                </div><!-- Card Wrapper -->

                <!-- Card Wrapper -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Categories <span>| Topic Variations</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-tags"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>145</h6>
                                </div>
                            </div>
                            
                        </div>
                    </div><!-- End Card -->
                </div><!-- Card Wrapper -->

                <!-- Card Wrapper -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Purchase Cost <span>| Gross Amount</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-cash"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ convertEnToBnNumber(145) }}</h6>
                                </div>
                            </div>
                            
                        </div>
                    </div><!-- End Card -->
                </div><!-- Card Wrapper -->

                <!-- Card Wrapper -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Pages <span>| All Pages in Collection</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-file-earmark-word"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>145</h6>
                                </div>
                            </div>
                            
                        </div>
                    </div><!-- End Card -->
                </div><!-- Card Wrapper -->

                <!-- Card Wrapper -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Recommendations <span>| By Readers</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-clipboard-check"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>145</h6>
                                </div>
                            </div>
                            
                        </div>
                    </div><!-- End Card -->
                </div><!-- Card Wrapper -->

                <!-- Recent Purchase -->
                <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                    <h5 class="card-title">Recent Purchase <span>| Today</span></h5>

                    <table class="table table-borderless datatable">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Price</th>
                            <th scope="col">Category</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row"><a href="#">#2457</a></th>
                            <td>Brandon Jacob</td>
                            <td><a href="#" class="text-primary">At praesentium minu</a></td>
                            <td>$64</td>
                            <td><span class="badge bg-success">Approved</span></td>
                        </tr>
                        <tr>
                            <th scope="row"><a href="#">#2147</a></th>
                            <td>Bridie Kessler</td>
                            <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                            <td>$47</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                        </tr>
                        <tr>
                            <th scope="row"><a href="#">#2049</a></th>
                            <td>Ashleigh Langosh</td>
                            <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                            <td>$147</td>
                            <td><span class="badge bg-success">Approved</span></td>
                        </tr>
                        <tr>
                            <th scope="row"><a href="#">#2644</a></th>
                            <td>Angus Grady</td>
                            <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                            <td>$67</td>
                            <td><span class="badge bg-danger">Rejected</span></td>
                        </tr>
                        <tr>
                            <th scope="row"><a href="#">#2644</a></th>
                            <td>Raheem Lehner</td>
                            <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                            <td>$165</td>
                            <td><span class="badge bg-success">Approved</span></td>
                        </tr>
                        </tbody>
                    </table>

                    </div>

                </div>
                </div><!-- End Recent Purchase -->

            </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

            <!-- Recent Activity -->
            <div class="card">

                <div class="card-body">
                <h5 class="card-title">Recently Read <span>| Last 10 Books</span></h5>

                <div class="activity">

                    <div class="activity-item d-flex">
                    <div class="activite-label">10 Jun, 2022</div>
                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                    <div class="activity-content">
                        মহুয়ার সংসার (সিজার ভৌমিক)
                    </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                    <div class="activite-label">11 Oct, 2022</div>
                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                    <div class="activity-content">
                        All Golder Sky (Herth Clev)
                    </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                    <div class="activite-label">03 Nov, 2022</div>
                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                    <div class="activity-content">
                        আরণ্যক (বিভূতিভূষণ বন্দোপাধ্যায়)
                    </div>
                    </div><!-- End activity item-->

                    <div class="activity-item d-flex">
                    <div class="activite-label">23 Nov, 2022</div>
                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                    <div class="activity-content">
                        যতোনের বাধন (মিলি আক্তার)
                    </div>
                    </div><!-- End activity item-->

                </div>

                </div>
            </div><!-- End Recent Activity -->

            </div><!-- End Right side columns -->

        </div> <!-- End of .row -->

    </section>

</x-layout>