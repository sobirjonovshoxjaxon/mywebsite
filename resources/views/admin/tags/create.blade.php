@extends('admin.main')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
             
                <div class="card">
                  <div class="card-header">
                    <h4>Tag Create Form</h4>
                    <a href="{{ route('tags.index')}}" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">

                   <form action="{{ route('tags.store')}}" method="POST">
                        @csrf 

                        <div class="form-group">
                            <label for="">Tag</label>
                            <div class="input-group mb-2">
                                <input name="tag" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Tag" value="{{ old('tag')}}">
                            </div>
                            @error('tag')
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