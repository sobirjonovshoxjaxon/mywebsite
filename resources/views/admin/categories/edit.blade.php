@extends('admin.main')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
             
                <div class="card">
                  <div class="card-header">
                    <h4>Category Update Form</h4>
                    <a href="{{ route('categories.index')}}" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">

                   <form action="{{ route('categories.update',$category->id)}}" method="POST">
                        @csrf 
                        @method('PUT')

                        <div class="form-group">
                            <label for="">Category</label>
                            <div class="input-group mb-2">
                                <input name="category" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Category" value="{{ $category->category }}">
                            </div>
                            @error('category')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-warning">Update</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                   </form>
                    
                  </div>
                </div>
                
            </div>
@endsection