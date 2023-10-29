@extends('front-end.master')

@section('title')
    Contact
@endsection


@section('content')


    <div class="hero-wrap" style="background-image: url('{{asset('front-end-assets')}}/assets-2/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
                <div class="col-md-3">
                    <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Website</span> <a href="#">yoursite.com</a></p>
                </div>
            </div>
            <div class="row block-9">
                <div class="col-md-6 pr-md-5">
                    <h4 class="mb-4">Do you have any questions?</h4>
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>

{{--                <div class="col-md-6" id="map"></div>--}}

{{--                src must be change through admin--}}
                <div class="col-md-6 mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=466&amp;height=430&amp;hl=en&amp;q=mirpur 1&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections Unlimited</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:430px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:430px;}.gmap_iframe {height:430px!important;}</style></div>
                 </div>
        </div>
    </section>

@endsection
