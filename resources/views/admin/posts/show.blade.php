@extends('admin.main')
@section('content')

    <div class="mb-3">
        <h3>This is Post Show Page</h3><br>
    </div>


    

    <div>
        <h6><b>Title: </b>{{ $post->title }}</h6>
        <h6><b>Image: </b>{{ $post->image }}</h6>
        <img src="" alt="">
        <h6><b>Short content: </b>{{ $post->short_content }}</h6>
        <h6><b>Content: </b>{{ $post->content}}</h6>
        <h6><b>Created_at: </b>{{ $post->created_at }}</h6>
        <h6><b>Updated_at: </b>{{ $post->updated_at }}</h6>
    </div>


@endsection