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
                                    <th>Title (Bangla)</th>
                                    <td>{{ $model->title_bn }}</td>
                                </tr>
                                <tr>
                                    <th>Title (English)</th>
                                    <td>{{ $model->title_en ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Slug</th>
                                    <td>{{ $model->slug ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Author</th>
                                    <td>
                                        @php($count = 1)
                                        @if(count($model->authors) > 0)
                                            @foreach($model->authors as $author)
                                            <a href="{{ url('admin/search-author/' . $model->id) }}">
                                                {{ $author->title_bn }}
                                            </a> @if($count > 1) {{ ', ' }} @endif
                                            @php($count++)
                                            @endforeach
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Publisher</th>
                                    <td>
                                        <a href="{{ url('admin/search-publisher/' . $model->id) }}">
                                            {{ $model->publisher->title_bn }}
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Category</th>
                                    <td>
                                        @php($count = 1)
                                        @if(count($model->categories) > 0)
                                            @foreach($model->categories as $category)
                                            <a href="{{ url('admin/search-category/' . $category->id) }}">{{ trim($category->title_bn) }}</a> 
                                            @if($count > 0 && $count < count($model->categories) ) {{ ', ' }} @endif
                                            @php($count++)
                                            @endforeach
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Printed Price</th>
                                    <td>{{ convertEnToBnNumber($model->printed_price ?? '-') }}</td>
                                </tr>
                                <tr>
                                    <th>Purchase Price</th>
                                    <td>{{ convertEnToBnNumber($model->purchase_price ?? '-') }}</td>
                                </tr>
                                <tr>
                                    <th>Number of Pages</th>
                                    <td>{{ convertEnToBnNumber($model->pages ?? '-') }}</td>
                                </tr>
                                <tr>
                                    <th>Thumbnail</th>
                                    <td>{{ $model->image ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Collection Method</th>
                                    <td>
                                        <span class="badge bg-success custom-badge">
                                            {{ $model->collectionMethod->title_bn }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Entry / Index Number</th>
                                    <td>{{ convertEnToBnNumber($model->entry_no ?? '-') }}</td>
                                </tr>
                                <tr>
                                    <th>Entry / Index Date</th>
                                    <td>{{ convertEnToBnNumber($model->entry_date ?? '-') }}</td>
                                </tr>
                                <tr>
                                    <th>Storage Location</th>
                                    <td>
                                        <a href="{{ url('admin/search-storage/' . $model->id) }}">
                                            {{ $model->storage->title_bn }}
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Stage / Status</th>
                                    <td>
                                        <a href="{{ url('admin/search-state/' . $model->id) }}">
                                            {{ $model->state->title_bn }}
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Recommended by Admin</th>
                                    <td>
                                        @if($model->recommended == 0)
                                            <span class="badge bg-warning custom-badge">Not Yet Set</span>
                                        @elseif($model->recommended == 1)
                                            <span class="badge bg-success custom-badge">Recommended</span>
                                        @else
                                            <span class="badge bg-danger custom-badge">Not Recommended</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Notes</th>
                                    <td>{{ $model->notes ?? '-' }}</td>
                                </tr>
                            </table>
                            
                            <a class="btn btn-sm btn-success" href="{{ url('admin/book') }}">Back to All Books</a> &nbsp;
                            <a class="btn btn-sm btn-warning" href="{{ url('admin/book/' . $model->id . '/edit') }}">Edit</a>

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