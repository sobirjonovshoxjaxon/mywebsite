@extends('admin.main')
@section('content')
           
            
           @auth
                <h1>Welcome {{ auth()->user()->name }}</h1>

                @else

                <h1>I see who you are!</h1>
           @endauth
           
@endsection    
         