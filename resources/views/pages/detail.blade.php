@extends('layouts.app')
@section('title', 'Detail Travel')

@section('content')

    <!-- DETAILS HEADER : START -->
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item">
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>Pantai Kuta</h1>
                            <p>Republic of Indonesia Raya</p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="FRONTEND/images/details-1.jpg" class="xzoom" id="xzooom-default"
                                        xoriginal="FRONTEND/images/details-1.jpg">
                                    <div class="xzoom-thumbs">
                                        <a href="FRONTEND/images/details-1.jpg">
                                            <img src="FRONTEND/images/details-1.jpg" class="xzoom-gallery" width="128"
                                                xpreview="FRONTEND/images/details-1.jpg">
                                        </a>
                                        <a href="FRONTEND/images/details-1.jpg">
                                            <img src="FRONTEND/images/details-1.jpg" class="xzoom-gallery" width="128"
                                                xpreview="FRONTEND/images/details-1.jpg">
                                        </a>
                                        <a href="FRONTEND/images/details-1.jpg">
                                            <img src="FRONTEND/images/details-1.jpg" class="xzoom-gallery" width="128"
                                                xpreview="FRONTEND/images/details-1.jpg">
                                        </a>
                                        <a href="FRONTEND/images/details-1.jpg">
                                            <img src="FRONTEND/images/details-1.jpg" class="xzoom-gallery" width="128"
                                                xpreview="FRONTEND/images/details-1.jpg">
                                        </a>
                                        <a href="FRONTEND/images/details-1.jpg">
                                            <img src="FRONTEND/images/details-1.jpg" class="xzoom-gallery" width="128"
                                                xpreview="FRONTEND/images/details-1.jpg">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <h2>About Place</h2>
                            <p>
                                Kuta Beach is a tourism place located in Kuta sub-district, south of Denpasar City,
                                Bali, Indonesia. This area is a tourist destination for foreign tourists and has
                                become a mainstay tourist attraction on the island of Bali since the early 1970s.
                                Kuta Beach is often referred to as a sunset beach as opposed to Sanur beach.
                            </p>
                            <p>
                                In addition, I Gusti Ngurah Rai Airport is located not far from Kuta.
                            </p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <img src="FRONTEND/images/ic_event.png" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Featured Event</h3>
                                        <p>Fireworks Festival</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="FRONTEND/images/ic_event_language.png" alt=""
                                            class="features-image">
                                        <div class="description">
                                            <h3>Language</h3>
                                            <p>Bahasa Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="FRONTEND/images/ic_event_foods.png" alt="" class="features-image">
                                        <div class="description">
                                            <h3>Foods</h3>
                                            <p>Local Foods</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Members are going</h2>
                            <div class="members my-2">
                                <img src="FRONTEND/images/member_1.png" class="member-image mr-1">
                                <img src="FRONTEND/images/member_2.png" class="member-image mr-1">
                                <img src="FRONTEND/images/member_3.png" class="member-image mr-1">
                                <img src="FRONTEND/images/member_4.png" class="member-image mr-1">
                                <img src="FRONTEND/images/member_5.png" class="member-image mr-1">
                                <img src="FRONTEND/images/member_6.png" class="member-image mr-1">
                            </div>
                            <hr>
                            <h2>Trip Informations</h2>
                            <table class="trip-informations">
                                <tr>
                                    <th width="50%">Date of Departure</th>
                                    <td width="50%" class="text-right">
                                        22 Aug, 2022
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50%" class="text-right">
                                        4 Days 3 Night
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Type of Trip</th>
                                    <td width="50%" class="text-right">
                                        Open Public
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-right">
                                        $80.00 / person
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container">
                            <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                Join Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- DETAILS HEADER : END -->
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ asset('FRONTEND/libraries/xzoom/xzoom.css') }}">
@endpush

@push('addon-script')
    <script src="{{ asset('FRONTEND/libraries/xzoom/xzoom.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });
        });
    </script>
@endpush
