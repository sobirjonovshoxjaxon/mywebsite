@extends('admin.main')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Categories Table</h4>
                    <a href="{{ route('categories.create')}}" class="btn btn-success">Create</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>id</th>
                          <th>Category</th>
                          <th colspan="3">Action</th>
                        </tr>

                        @foreach ($categories as $category)
                            
                       
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->category }}</td>
                                
                                <td>
                                    <a href="{{ route('categories.show',$category->id)}}" class="btn btn-primary">Show</a>
                                </td>
                                <td>
                                    <a href="{{ route('categories.edit',$category->id)}}" class="btn btn-warning">Edit</a>
                                </td>
                                <td>
                                <form action="{{ route('categories.destroy',$category->id)}}" method="POST">
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