@extends('admin.main')
@section('content')

    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>This is Category Show Page</h1><br>

            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
               
                <h6><b>Category: </b>{{ $category->category }}</h6>
                <h6><b>Created_at: </b>{{ $category->created_at }}</h6>
                <h6><b>Updated_at: </b>{{ $category->updated_at }}</h6>

                
               
            </div>
            <a href="{{ route('categories.index')}}" class="btn btn-dark">Back</a>
        </div>
    </div>


@endsection