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
                                {{ $page_subtitle ?? ""}}
                                | <span>
                                    <a href="{{ url('admin/user/create') }}">Add New User</a>
                                </span>
                            </h5>
                            

                            @if( $users->count() > 0 )

                            <table class="table table-borderless datatable align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Name (Bangla)</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @php($count = 1)

                                    @foreach( $users as $user )
                                    <tr>
                                        <th scope="row">{{ $count }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->name_bn ?? '-' }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->mobile ?? "-" }}</td>
                                        <td>
                                            @if($user->role == 'administrator')
                                                <span class="badge bg-danger">{{ ucfirst($user->role) }}</span>
                                            @else
                                                <span class="badge bg-warning">{{ ucfirst($user->role) }}</span>
                                            @endif
                                        </td>
                                        <td x-data="{
                                            confirm : function(event){
                                                result = confirm('Sure? You want to delete this record?');
                                                if( result === false){
                                                    event.preventDefault()
                                                }
                                            }
                                        }">
                                            <a class="btn btn-sm btn-success" href="{{ url('admin/user/' . $user->id) }}">View</a> &nbsp;
                                            <a class="btn btn-sm btn-info" href="{{ url('admin/user/' . $user->id . '/edit') }}">Edit</a> &nbsp;
                                            <form class="d-inline" method="POST" action="{{ url('admin/user/' . $user->id) }}">
                                                @csrf 
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger" confirm="Sure? You really want to Delete?"
                                                @click="confirm"
                                                >
                                                    Delete
                                                </button>
                                            </form>
                                            
                                        </td>
                                    </tr>

                                    @php($count++)

                                    @endforeach
                                </tbody>
                            </table>

                            {{ $users->links() }}

                            @else

                                <p class="fw-semibold text-danger">No users were added yet! Add some first.</p>

                            @endif

                        </div>

                    </div>
                </div><!-- End of "Data Card Area" -->

            </div>

        </div> <!-- End of .row -->

    </section> <!-- End of .section wrapper -->

</x-layout>