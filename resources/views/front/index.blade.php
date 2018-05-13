@extends('front.layout')
@section('content')

<!-- Parallax Section - Players -->
<div class="parallax-section parallax-total" style="background:url({{ asset_front('img/slide/1.jpg') }});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="recent-results results-page">
                    <h1 class="center">Today Matches</h1>
                    <div class="info-results">
                        <ul>
                            <li>
                                <span class="head">
                                    Portugal Vs Spain <span class="date">27 Jun 2017</span>
                                </span>

                                <div class="goals-result">
                                    <a href="single-team.html">
                                        <img src="{{ asset_front('img/clubs-logos/por.png') }}" alt="">
                                        Portugal
                                    </a>

                                    <span class="goals">
                                        <b>2</b> - <b>3</b>
                                        <a href="single-result.html" class="btn theme">View More</a>
                                    </span>

                                    <a href="single-team.html">
                                        <img src="{{ asset_front('img/clubs-logos/esp.png') }}" alt="">
                                        Spain
                                    </a>
                                </div>
                            </li>

                            <li>
                                <span class="head">
                                    Rusia Vs Colombia <span class="date">30 Jun 2017</span>
                                </span>

                                <div class="goals-result">
                                    <a href="single-team.html">
                                        <img src="{{ asset_front('img/clubs-logos/rusia.png') }}" alt="">
                                        Rusia
                                    </a>

                                    <span class="goals">
                                        <b>2</b> - <b>3</b>
                                        <a href="single-result.html" class="btn theme">View More</a>
                                    </span>

                                    <a href="single-team.html">
                                        <img src="{{ asset_front('img/clubs-logos/colombia.png') }}" alt="">
                                        Colombia
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Gray Section - Players -->
@endsection
