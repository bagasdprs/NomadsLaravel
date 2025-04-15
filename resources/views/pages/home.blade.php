@extends('layouts.app')

@section('title')
    NOMADS Travel
@endsection

@section('content')
    <!-- HEADER : START -->
    <header class="text-center">
        <h1>Explore the Beautiful World
            <br>
            As Easy One Click
        </h1>
        <p class="mt-3">
            Make your travel
            <br>
            life more colorful
        </p>
        <a href="#" class="btn btn-get-started px-4 mt-4">
            Get Started
        </a>
    </header>
    <!-- HEADER : END -->

    <!-- MAIN CONTENT : START -->
    <main>
        <!-- STATS : START -->
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3K</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>75</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>
        <!-- STATS : END -->

        <!-- WISATA POPULAR : START -->
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>Something that you never try
                            <br>
                            before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-popular-content" id="popularcontent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url(FRONTEND/images/popular-1.jpg);">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">PANTAI KUTA, BALI</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url(FRONTEND/images/popular-2.jpg);">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">BROMO, MALANG</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url(FRONTEND/images/popular-3.jpg);">
                            <div class="travel-country">SOUTH KOREA</div>
                            <div class="travel-location">JEJU ISLAND</div>
                            <div class="travel-button mt-auto">
                                <a href="={{ route('detail') }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url(FRONTEND/images/popular-4.jpg);">
                            <div class="travel-country">DUBAI</div>
                            <div class="travel-location">BURJ KHALIFA</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- WISATA POPULAR : END -->

        <!-- NETWORKS : START -->
        <section class="section-networks" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>
                            Company are trusted us
                            <br>
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="FRONTEND/images/partners.png" alt="Logo Partner" class="img-partner">
                    </div>
                </div>
            </div>
        </section>
        <!-- NETWORKS : END -->

        <!-- TESTIMONIAL : START -->
        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>
                            They Are Loving US
                        </h2>
                        <p>
                            Moments were Giving them
                            <br>
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="FRONTEND/images/testimonial-1.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Bagas Dwiprasandi</h3>
                                <p class="testimonial">"I've had a lot of amazing
                                    experiences for this trip,
                                    I'm very happy and too excited
                                    for my next trip"</p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Pantai Kuta
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="FRONTEND/images/testimonial-2.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Andini Putri Mulandari</h3>
                                <p class="testimonial">"The scenery is so beautiful.
                                    I never get bored to enjoy the
                                    natural beauty of
                                    the mountains"</p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Bromo
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="FRONTEND/images/testimonial-3.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Yabuki Nako</h3>
                                <p class="testimonial">"The Trip was amazing and
                                    I saw something beautiful in
                                    that Island that makes me
                                    want to learn more" </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Jeju Island
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help</a>
                        <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- TESTIMONIAL : END -->
    </main>
    <!-- MAIN CONTENT : END -->
@endsection
