@extends('admin.main')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tags Table</h4>
                    <a href="{{ route('tags.create')}}" class="btn btn-success">Create</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>id</th>
                          <th>Tag</th>
                          <th colspan="3">Action</th>
                        </tr>

                        @foreach ($tags as $tag)
                            
                       
                            <tr>
                                <td>{{ $tag->id }}</td>
                                <td>{{ $tag->tag }}</td>
                                
                                <td>
                                    <a href="{{ route('tags.show',$tag->id)}}" class="btn btn-primary">Show</a>
                                </td>
                                <td>
                                    <a href="{{ route('tags.edit',$tag->id)}}" class="btn btn-warning">Edit</a>
                                </td>
                                <td>
                                <form action="{{ route('tags.destroy',$tag->id)}}" method="POST">
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