@extends('layouts.master')
@section('content')


	  <section class="hero-wrap js-fullheight" style="background-image: url('{{ asset ('assets/images/bg_1.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-12 ftco-animate pb-5 mb-3 text-center">
            <h1 class="mb-3 bread">{{ auth()->user()->name }}</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index.page')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3">{{ $post->title }}</h2>
            <p>
              <img src="{{ asset ('storage/'.$post->image)}}" alt="" class="img-fluid">
            </p>
           
            <p>{{ $post->content }}</p>
           

            {{-- Tags start --}}
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Life</a>
                <a href="#" class="tag-cloud-link">Sport</a>
                <a href="#" class="tag-cloud-link">Tech</a>
                <a href="#" class="tag-cloud-link">Travel</a>
                <a href="{{ route('index.page')}}" class="tag-cloud-link">Blog</a>
              </div>
            </div>
            {{-- End Tags start --}}

            
            {{-- Creater of post --}}
            <div class="about-author d-flex p-4 bg-dark">
              <div class="bio mr-5">
                <img src="{{ asset ('storage/'.$post->user->image )}}" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc">
                <h3>{{ $post->user->name }}</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
              </div>
            </div>
            {{-- Creater of post --}}



            <div class="pt-5 mt-5">
              <h3 class="mb-5">{{ $post->comments->count() }} Comments</h3>
              <ul class="comment-list">

                @foreach ($post->comments as $comment)
                  
                
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="{{ asset ('storage/'.$comment->user->image)}}" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>{{ $comment->user->name }}</h3>
                      <div class="meta">June 20, 2019 at 2:21pm</div>
                      <p>{{ $comment->body }}</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>
                  </li>

                @endforeach


               
              </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>

                @auth
                  
                  <form action="{{ route('comments.store')}}" class="p-5 bg-dark" method="POST">
                    @csrf 

                    <input type="hidden" name="post_id" value="{{ $post->id }}"> 

                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea name="body" id="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                    </div>

                  </form>

                  @else 

                 <div class="d-flex">
                    <p>Would you like write a comment? Let's </p>
                    <p> - </p>
                    <a href="{{ route('register')}}"> Register</a>
                    <a href="{{ route('login')}}"> Login</a>
                 </div>

                  

                @endauth

              </div>


            </div>

          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
            	<h3 class="heading-sidebar">Categories</h3>
              <ul class="categories">

                @foreach ($categories as $category)
                  <li><a href="#">{{ $category->category }}<span>{{ $category->posts->count() }}</span></a></li>
                @endforeach
               
              </ul>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Recent Blog</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url({{ asset ('assets/images/image_1.jpg')}});"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> March 12, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url({{ asset ('assets/images/image_2.jpg')}});"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> March 12, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url({{ asset ('assets/images/image_3.jpg')}});"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> March 12, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Tag Cloud</h3>
              <div class="tagcloud">

                @foreach ($post->tags as $tag)

                  <a href="#" class="tag-cloud-link">{{ $tag->tag }}</a>
                @endforeach
               
              
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->
		
@endsection
   