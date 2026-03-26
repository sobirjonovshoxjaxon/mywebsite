@extends('admin.main')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
             
                <div class="card">
                  <div class="card-header">
                    <h4>Post Edit Form</h4>
                    <a href="{{ route('posts.index')}}" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">

                   <form action="{{ route('posts.update')}}" method="POST">
                        @csrf 

                        <div class="form-group">
                        <div class="input-group mb-2">
                            <input name="title" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Title">
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="input-group mb-2">
                            <input name="image" type="file" class="form-control" id="inlineFormInputGroup" placeholder="Image">
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="input-group mb-2">
                            <input name="short_content" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Short_content    ">
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="input-group mb-2">
                            <textarea name="content" class="form-control"></textarea>
                        </div>
                        </div>

                        <button type="submit" class="btn btn-warning">Edit</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                   </form>
                    
                  </div>
                </div>
                
            </div>
@endsection