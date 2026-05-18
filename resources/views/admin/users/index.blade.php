@extends('admin.main')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Users Table</h4>
                    <a href="{{ route('users.create')}}" class="btn btn-success">Create</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>id</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th colspan="3">Action</th>
                        </tr>

                        @foreach ($users as $user)
                            
                       
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>
                                <img width="100" src="{{ asset ('storage/'.$user->image)}}" alt="">
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->password }}</td>
                                <td>
                                <a href="{{ route('users.show',$user->id)}}" class="btn btn-primary">Show</a>
                                </td>
                                <td>
                                <a href="{{ route('users.edit',$user->id)}}" class="btn btn-warning">Edit</a>
                                </td>
                                <td>
                                <form action="{{ route('users.destroy',$user->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf 


                                    <input type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger" value="Delete" class="btn btn-danger">
                                </form>
                                </td>
                            </tr>

                        @endforeach
                      </table>
                    </div>
                  </div>

                  
                  {{-- {{ $posts->links('vendor.pagination.bootstrap-5') }} --}}
                  

                </div>
            </div>

@endsection