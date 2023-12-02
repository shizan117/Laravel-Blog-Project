@extends('front-end.master')

@section('title')

    Blog

@endsection

@section('content')





    <div class="hero-wrap" style="background-image: url('{{asset('front-end-assets')}}/assets-2/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-md-4 d-flex ftco-animate" style="width: 100%">
                        <div class="blog-entry ">
                            <a href="{{route('blog.single',[$blog->id])}}" class="block-20" style="background-image: url('{{$blog->image}}');">
                            </a>
                            <div class="text p-4" style="width: 450px">
                                <div class="meta mb-4">
                                    <div><a href="#">{{date('M jS \'y',strtotime($blog->created_at))}}</a></div>
                                    <div>{{$blog->author_name}}</div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                                <h3 class="heading mb-4">{{$blog->title}}</h3>
                                <p>{{substr($blog->description,0,20).'[...]'}}</p>

                                <p><a href="{{route('blog.single',[$blog->id])}}">Read More</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
