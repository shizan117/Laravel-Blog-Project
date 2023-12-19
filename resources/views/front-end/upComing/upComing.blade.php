@extends('front-end.master')

@section('title')
    UpComing
@endsection

@section('content')

    <div class="hero-wrap" style="height: 50%; background-color: darkslategray;" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h2 class="mb-4" style="color: whitesmoke">This Page is Under Construction</h2>

                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="https://vimeo.com/45830194" class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span class="icon-play mr-2"></span>Watch Video</a></p>
                    <br>

                    <h2 class="mb-4" style="color: whitesmoke">Subscribe to Our Updates</h2>
                    <p>Stay informed about our progress. Enter your email below:</p>

                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
                    <br>
                   </div>
            </div>
        </div>
    </div>





@endsection
