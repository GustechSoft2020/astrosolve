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
            <div class="row gx-0 justify-content-center">
                @if(isset($blogs) && !empty($blogs))
                    @foreach($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="blog__post__item">
                                <div class="blog__post__thumb">
                                    <a href="{{ route('page.blogdetail',$blog->id) }}"><img src="{{ asset($blog->blog_image) }}" alt=""></a>
                                    <div class="blog__post__tags">
                                        <a href="blog.html">{{$blog->blog_tags }}</a>
                                    </div>
                                </div>
                                <div class="blog__post__content">
                                    <span class="date">{{ date('F dS, Y', strtotime( $blog->updated_at )) }}</span>
                                    <h3 class="title"><a href="{{ route('page.blogdetail',$blog->id) }}">{!! substr( preg_replace("/<\/?div[^>]*\>/i", "", $blog->blog_description), 0,250 ) !!} ...</a></h3>
                                    <a href="{{ route('page.blogdetail',$blog->id) }}" class="read__more">Read mORe</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p> There is no post available.</p>
                @endif
            </div>
        </div>
    </section>
    <!-- blog-area-end -->

@endsection