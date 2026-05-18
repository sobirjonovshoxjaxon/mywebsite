@extends('admin.main')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
             
                <div class="card">
                  <div class="card-header">
                    <h4>Tag Edit Form</h4>
                    <a href="{{ route('tags.index')}}" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">

                   <form action="{{ route('tags.update',$tag->id)}}" method="POST">
                        @csrf 
                        @method('PUT')

                        <div class="form-group">
                            <label for="">Tag</label>
                            <div class="input-group mb-2">
                                <input name="tag" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Tag" value="{{ $tag->tag }}">
                            </div>
                            @error('tag')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-warningg">Edit</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                   </form>
                    
                  </div>
                </div>
                
            </div>
@endsection