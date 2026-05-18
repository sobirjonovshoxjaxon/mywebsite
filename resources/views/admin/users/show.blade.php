@extends('admin.main')
@section('content')

    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>This is Post Show Page</h1><br>

            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
               
                <h6><b>Name: </b>{{ $user->name }}</h6>
                <h6><b>Image: </b></h6>
                <img width="150px;" src="{{ asset('storage/'.$user->image)}}" alt="">
                <h6><b>Password: </b>{{ $user->password }}</h6>
                <h6><b>Email: </b>{{ $user->email }}</h6>
                <h6><b>Created_at: </b>{{ $user->created_at }}</h6>
                <h6><b>Updated_at: </b>{{ $user->updated_at }}</h6>

                
               
            </div>
            <a href="{{ route('users.index')}}" class="btn btn-dark">Back</a>
        </div>
    </div>


@endsection