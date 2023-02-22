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
                                    <th>Reader/User Name and ID</th>
                                    <td>{{ $model->user->name . ' (' . $model->user->id . ')' }}</td>
                                </tr>
                            </table>
                            
                            <a class="btn btn-sm btn-success" href="{{ url('admin/favourite') }}">Back to Favourite List</a> &nbsp;
                            
                            <form class="d-inline" method="POST" action="{{ url('admin/favourite/' . $model->id) }}" x-data="{
                                confirm : function(event){
                                    result = confirm('Sure? You want to delete this record?');
                                    if( result === false){
                                        event.preventDefault()
                                    }
                                }
                            }">
                                @csrf 
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" confirm="Sure? You really want to Delete?"
                                @click="confirm"
                                >
                                    Delete
                                </button>
                            </form>

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