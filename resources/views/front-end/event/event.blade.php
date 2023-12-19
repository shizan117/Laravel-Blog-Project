@extends('front-end.master')

@section('title')

    Events

@endsection

@section('content')

    <div class="hero-wrap" style="background-image: url('{{asset('front-end-assets')}}/assets-2/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('home')}}">Home</a></span> <span>Event</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Events</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section">
        <div class="container">
            <div class="row">
                @foreach($events as $event)
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{route('event.single',[$event->id])}}" class="block-20" style="background-image: url('{{$event->image}}');">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="#">{{\Carbon\Carbon::parse($event->datetime)->format('j- M- Y')}}</a></div>

                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mb-4"><a href="{{route('event.single',[$event->id])}}">{{$event->title}}</a></h3>
                            <p class="time-loc">
                                <span class="mr-2"><i class="icon-clock-o"></i> {{ \Carbon\Carbon::parse($event->datetime)->format('h:ia') }}</span>
                                <span><i class="icon-map-o"></i>{{ $event->location }}</span>
                            </p>
                            <p>{{ substr($event->description, 0, 100).'[...]'}}</p>
                            <p><a href="{{route('event.single',[$event->id])}}">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
