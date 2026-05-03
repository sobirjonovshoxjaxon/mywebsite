@extends('admin.main')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
             
                <div class="card">
                  <div class="card-header">
                    <h4>Post Create Form</h4>
                    <a href="{{ route('posts.index')}}" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">

                   <form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf 

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <input name="title" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Title">
                            </div>
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <input name="image" type="file" class="form-control" id="inlineFormInputGroup" placeholder="Image">
                            </div>
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <input name="short_content" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Short_content    ">
                            </div>
                            @error('short_content')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <textarea name="content" class="form-control"></textarea>
                            </div>
                            @error('content')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success">Create</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                   </form>
                    
                  </div>
                </div>
                
            </div>
@endsection