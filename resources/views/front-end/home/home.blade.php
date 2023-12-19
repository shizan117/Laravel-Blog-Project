@extends('front-end.master')

@section('title')
    Home
@endsection


@section('content')
    <div class="hero-wrap" style="background-image: url('{{asset('front-end-assets')}}/assets-2/images/bg_7.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Doing Nothing is Not An Option of Our Life</h1>
                    <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Created by <a href="#">Colorlib.com</a></p>

                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="https://vimeo.com/45830194" class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span class="icon-play mr-2"></span>Watch Video</a></p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-counter ftco-intro" id="section-counter">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-1 align-items-stretch">
                        <div class="text">
                            <span>Served Over</span>
                            <strong class="number" data-number="80250">0</strong>
                            <span>Children in 190 countries in the world</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-2 align-items-stretch">
                        <div class="text">
                            <h3 class="mb-4">Donate Money</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts.</p>
                            <p><a href="{{route('upComing')}}" class="btn btn-white px-3 py-2 mt-2">Donate Now</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 color-3 align-items-stretch">
                        <div class="text">
                            <h3 class="mb-4">Be a Volunteer</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts.</p>
{{--                            <p><a href="{{$abouts->volunteer_google_form}}" target="_blank" class="btn btn-white px-3 py-2 mt-2">Be A volunteer</a></p>--}}
                            <p><a href="{{route('volunteer')}}" target="_blank" class="btn btn-white px-3 py-2 mt-2">Be A Volunteer</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 d-flex services p-3 py-4 d-block">
                        <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Make Donation</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 d-flex services p-3 py-4 d-block">
                        <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Become A Volunteer</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 d-flex services p-3 py-4 d-block">
                        <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Sponsorship</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-8 text-center">
                    <h2 class="mb-4 section-title">Recent From Our Blog</h2>
                    <p class="section-subtitle">Explore our latest articles and stay updated with our stories.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="carousel-cause owl-carousel">
                        @for($i = 0; $i < min(count($blogs), 8); $i++)
                            <div class="item">
                                <div class="cause-entry">
                                    <a href="{{ route('blog.single', [$blogs[$i]->id]) }}" class="img" style="background-image: url('{{ $blogs[$i]->image }}');"></a>
                                    <div class="text p-3 p-md-4">
                                        <h3 class="heading text-center font-weight-bold"><a href="{{ route('blog.single', [$blogs[$i]->id]) }}" class="blog-title">{{ $blogs[$i]->title }}</a></h3>
                                        <p class="blog-excerpt">{{ substr($blogs[$i]->description, 0, 350).'[...]' }} <a href="{{ route('blog.single', [$blogs[$i]->id]) }}" class="read-more-link">Read More</a></p>
                                        <div class="meta mb-4">
                                            <div class="text-center">
                                                <span class="meta-date">{{ date('M jS, Y', strtotime($blogs[$i]->created_at)) }}</span>
                                                <span class="meta-author">By {{ $blogs[$i]->author_name }}</span>
                                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Latest Donations</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="d-flex mb-4">
                            <div class="img" style="background-image: url({{asset('front-end-assets')}}/assets-2/images/person_1.jpg);"></div>
                            <div class="info ml-4">
                                <h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
                                <span class="position">Donated Just now</span>
                                <div class="text">
                                    <p>Donated <span>$300</span> for <a href="#">Children Needs Food</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="d-flex mb-4">
                            <div class="img" style="background-image: url({{asset('front-end-assets')}}/assets-2/images/person_2.jpg);"></div>
                            <div class="info ml-4">
                                <h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
                                <span class="position">Donated Just now</span>
                                <div class="text">
                                    <p>Donated <span>$150</span> for <a href="#">Children Needs Food</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="d-flex mb-4">
                            <div class="img" style="background-image: url({{asset('front-end-assets')}}/assets-2/images/person_3.jpg);"></div>
                            <div class="info ml-4">
                                <h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
                                <span class="position">Donated Just now</span>
                                <div class="text">
                                    <p>Donated <span>$250</span> for <a href="#">Children Needs Food</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <section class="ftco-gallery">
        <div class="row">
            @for($i = 0; $i < min(count($blogs), 8); $i++)
                <a href="{{ asset($blogs[$i]->image) }}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url({{ asset($blogs[$i]->image) }});">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            @endfor
        </div>
    </section>



    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Explore Our Latest Events</h2>
                </div>
            </div>
            <div class="row">
                @for($i = 0; $i < min(count($events), 3); $i++)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="{{route('event.single',[$events[$i]->id])}}" class="block-20" style="background-image: url('{{$events[$i]->image}}');"> </a>
                            <div class="text p-4 d-block">
                                <div class="meta mb-3">
                                    <div><a href="#" class="meta-date">{{\Carbon\Carbon::parse($events[$i]->datetime)->format('j M, Y')}}</a></div>
                                    <div><a href="#" class="meta-author">By Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                                <h3 class="heading mb-4"><a href="{{route('event.single',[$events[$i]->id])}}" class="event-title">{{$events[$i]->title}}</a></h3>
                                <p class="time-loc">
                                    <span class="mr-2"><i class="icon-clock-o"></i> {{ \Carbon\Carbon::parse($events[$i]->datetime)->format('h:ia') }}</span>
                                    <span><i class="icon-map-o"></i>{{ $events[$i]->location }}</span>
                                </p>
                                <p class="event-description">{{ substr($events[$i]->description, 0, 150).'[...]' }}</p>
                                <p><a href="{{route('event.single',[$events[$i]->id])}}" class="btn btn-primary">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>



    <section class="ftco-section-3 img" style="background-image: url({{asset('front-end-assets')}}/assets-2/images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="img img-2 align-self-stretch" style="background-image: url({{asset('front-end-assets')}}/assets-2/images/bg_4.jpg);"></div>
                </div>
                <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                    <h3 class="mb-3">Contact Us</h3>
                    <form action="#" class="volunter-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



@endsection
