@extends('admin.main')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
             
                <div class="card">
                  <div class="card-header">
                    <h4>User Create Form</h4>
                    <a href="{{ route('categories.index')}}" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">

                   <form action="{{ route('categories.store')}}" method="POST">
                        @csrf 

                        <div class="form-group">
                            <label for="">Category</label>
                            <div class="input-group mb-2">
                                <input name="category" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Category" value="{{ old('category')}}">
                            </div>
                            @error('category')
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