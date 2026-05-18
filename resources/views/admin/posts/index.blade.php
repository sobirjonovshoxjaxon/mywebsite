@extends('admin.main')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Posts Table</h4>
                    <a href="{{ route('posts.create')}}" class="btn btn-success">Create</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>id</th>
                          <th>Title</th>
                          <th>Image</th>
                          <th>Short content</th>
                          <th>Content</th>
                          <th colspan="3">Action</th>
                        </tr>

                      @foreach ($posts as $post)  
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>
                              <img width="100px;" src="{{ asset('storage/'.$post->image)}}" alt="">
                            </td>
                            <td>{{ $post->short_content }}</td>
                            <td>{{ Str::limit($post->content,100) }}</td>

                            @canany(['update', 'delete', 'show'], $post)
                                
                           
                              <td>
                                <a href="{{ route('posts.show',['post' => $post->id])}}" class="btn btn-primary">Show</a>
                              </td>
                              <td>
                                <a href="{{ route('posts.edit',['post' => $post->id])}}" class="btn btn-warning">Edit</a>
                              </td>
                              <td>
                                <form action="{{ route('posts.destroy', $post->id )}}" method="POST">
                                  @method('DELETE')
                                  @csrf 


                                    <input type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger" value="Delete" class="btn btn-danger">
                                </form>
                              </td>

                            @endcanany
                            
                        </tr>
                      @endforeach
                      </table>
                    </div>
                  </div>

                  
                  {{ $posts->links('vendor.pagination.bootstrap-5') }}
                  

                </div>
            </div>

@endsection