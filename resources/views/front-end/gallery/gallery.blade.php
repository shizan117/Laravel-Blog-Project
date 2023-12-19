@extends('front-end.master')

@section('title')
    Gallery
@endsection

@section('content')
    <div class="hero-wrap" style="background-image: url('{{ asset('front-end-assets/assets-2/images/bg_2.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <span class="mr-2"><a href="{{ url('index.html') }}">Home</a></span>
                        <span>Gallery</span>
                    </p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Galleries</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section">

            <div class="row">
{{--                @foreach($events as $event)--}}
{{--                    <a href="{{ asset($event->image) }}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url({{ asset($event->image) }});">--}}
{{--                        <div class="icon d-flex justify-content-center align-items-center">--}}
{{--                            <span class="icon-search"></span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endforeach--}}

                @foreach($blogs as $blog)
                    <a href="{{ asset($blog->image) }}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url({{ asset($blog->image) }});">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                @endforeach

            </div>

    </section>



@endsection
