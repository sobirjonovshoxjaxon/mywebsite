@extends('admin.main')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
             
                <div class="card">
                  <div class="card-header">
                    <h4>User Create Form</h4>
                    <a href="{{ route('users.index')}}" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">

                   <form action="{{ route('users.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf 

                        <div class="form-group">
                            <label for="">Name</label>
                            <div class="input-group mb-2">
                                <input name="name" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Name" value="{{ old('name')}}">
                            </div>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="">Image</label>
                            <div class="input-group mb-2">
                                <input name="image" type="file" class="form-control" id="inlineFormInputGroup" placeholder="Image">
                            </div>
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="">Email</label>
                            <div class="input-group mb-2">
                                <input name="email" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Email" value="{{ old('email')}}">
                            </div>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                     
                        <div class="form-group">
                            <label for="">Password</label>
                            <div class="input-group mb-2">
                                <input name="password" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Password" value="{{ old('password') }}">
                            </div>
                            @error('password') 
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