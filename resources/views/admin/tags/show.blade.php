@extends('admin.main')
@section('content')

    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>This is Tag Show Page</h1><br>

            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
               
                <h6><b>Tag: </b>{{ $tag->tag }}</h6>
                <h6><b>Created_at: </b>{{ $tag->created_at }}</h6>
                <h6><b>Updated_at: </b>{{ $tag->updated_at }}</h6>

                
               
            </div>
            <a href="{{ route('tags.index')}}" class="btn btn-dark">Back</a>
        </div>
    </div>


@endsection