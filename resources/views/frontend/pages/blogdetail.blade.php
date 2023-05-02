@extends('frontend.main_master')
@section('main')
 <!-- breadcrumb-area -->
 <section class="breadcrumb__wrap page-banner">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="breadcrumb__wrap__content">
                    <h2 class="title">Our Blog</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

  <!-- blog-area -->
  <section class="standard__blog">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            @if(isset($blogs) && !empty($blogs))
                                @foreach($blogs as $blog)
                                    <div class="standard__blog__post">
                                        <div class="standard__blog__thumb">
                                            <img src="{{ asset($blog->blog_image) }}" alt="">
                                        </div>
                                        <div class="blog__details__content services__details__content">
                                            <ul class="blog__post__meta">
                                                <li><i class="fal fa-calendar-alt"></i> {{ date('F dS, Y', strtotime( $blog->updated_at )) }}</li>
                                            </ul>
                                            <h2 class="title mt-5">{{ $blog->blog_title }}</h2>
                                            <p>{!! preg_replace("/<\/?div[^>]*\>/i", "", $blog->blog_description) !!}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p> There is no post available.</p>
                            @endif
                        </div>
                        <div class="col-lg-4">
                            <aside class="blog__sidebar">
                                <div class="widget">
                                    <form action="#" class="search-form">
                                        <input type="text" placeholder="Search">
                                        <button type="submit"><i class="fal fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="widget">
                                    <h4 class="widget-title text-white">Recent Blog</h4>
                                    @if(isset($blogs) && !empty($blogs))
                                        <ul class="rc__post">

                                        
                                                @foreach($blogs as $blog)
                                                    <li class="rc__post__item">
                                                        <div class="rc__post__thumb">
                                                            <a href="{{ route('page.blogdetail',$blog->id) }}"><img src="{{ asset($blog->blog_image) }}" alt=""></a>
                                                        </div>
                                                        <div class="rc__post__content">
                                                            <h5 class="title"><a href="{{ route('page.blogdetail',$blog->id) }}">{!! substr( preg_replace("/<\/?div[^>]*\>/i", "", $blog->blog_description), 0,50 ) !!} ...</a></h5>
                                                            <span class="post-date"><i class="fal fa-calendar-alt"></i> {{ date('F dS, Y', strtotime( $blog->updated_at )) }}</span>
                                                        </div>
                                                    </li>
                                                @endforeach
                                        </ul>
                                    @else
                                        <p> There is no post available.</p>
                                    @endif
                                </div>
                                <div class="widget">
                                    <h4 class="widget-title text-white">Categories</h4>

                                    @if($blog_categories)
                                        <ul class="sidebar__cat">
                                        
                                            @foreach($blog_categories as $blog_category)
                                                <li class="sidebar__cat__item"><a href="{{ route('page.blogcategory',$blog_category->id) }}">{{ $blog_category->blog_category }}</a></li>
                                            @endforeach
                                        </ul>
                                    @else
                                            <p>There is no category available.</p>
                                    @endif

                                </div>

                                <div class="widget">
                                    <h4 class="widget-title text-white">Popular Tags</h4>
                                    @if(isset($blogs_lists))
                                    
                                        <ul class="sidebar__tags">

                                            @foreach($blogs_lists as $blog)
                                                @php
                                                    $tags = explode(',', $blog->blog_tags)
                                                @endphp
                                            @endforeach

                                         
                                                @if(isset($tags))
                                                    @php
                                                    $loop = count($tags);
                                                    @endphp
                                                    @for ($i = 0; $i<$loop; $i++)
                                                    <li><a href="{{ route('page.blogdetail',$blog->id) }}">{{ $tags[$i] }}</a></li>
                                                    @endfor
                                                @else
                                                <p> There is no tags available.</p>
                                                @endif
                                        

                                          


                                        </ul>
                                    @else
                                        <p> There is no tags available.</p>
                                    @endif
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->

@endsection