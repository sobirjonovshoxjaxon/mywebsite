@extends('admin.main')
@section('content')

    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>This is Post Show Page</h1><br>

            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
               
                <h6><b>Title: </b>{{ $post->title }}</h6>
                <h6><b>Image: </b>{{ $post->image }}</h6>
                <img width="150px;" src="{{ asset('storage/'.$post->image)}}" alt="">
                <h6><b>Short content: </b>{{ $post->short_content }}</h6>
                <h6><b>Content: </b>{{ $post->content}}</h6>
                <h6><b>Created_at: </b>{{ $post->created_at }}</h6>
                <h6><b>Updated_at: </b>{{ $post->updated_at }}</h6>

                
               
            </div>
            <a href="{{ route('posts.index')}}" class="btn btn-dark">Back</a>
        </div>
    </div>
    

    
    

    


@endsection