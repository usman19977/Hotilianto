@extends('frontend.layouts.master')
@section('content')
    <main class="pattern">
        <section class="hero_single version_2">
            <div class="wrapper">
                <div class="container">
                    <h3>Find what you need!</h3>
                    <p>
                        Discover top rated banquets, near by you & get according to your range
                    </p>
                    <form method="post" action="grid-listings-filterscol.html">
                        <div class="row no-gutters custom-search-input-2">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input
                                        class="form-control"
                                        type="text"
                                        placeholder="What are you looking for..."
                                    />
                                    <i class="icon_search"></i>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <select class="wide" name="venue_type">

                                        @foreach($data['venue_types'] as $venuetype)
                                            <option value="{{$venuetype->id}}">{{$venuetype->name}}</option>
                                        @endforeach

                                    </select>

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <select class="wide" name="city">

                                    @foreach($data['cities'] as $city)
                                        <option  value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-lg-2">
                                <input type="submit" value="Search" />
                            </div>
                        </div>
                        <!-- /row -->
                    </form>
                </div>
            </div>
        </section>
        <!-- /hero_single -->

        <div class="main_categories">
            <div class="container" >

                <ul class="clearfix" >

                    @foreach($data['venue_types'] as $venueType)
                        <li>
                            <a href="grid-listings-filterscol.html">
                                <i class="icon-restaurant"></i>
                                <h3>{{$venueType->name}}</h3>
                            </a>
                        </li>

                    @endforeach

                </ul>

            </div>
            <!-- /container -->
        </div>
        <!-- /main_categories -->

        <div class="container margin_60_35">
            <div class="main_title_3">
                <span></span>
                <h2>Famous Banquets</h2>
                <p>Get Qoutes From Most Of Them</p>
                <a href="grid-listings-filterscol.html">See all</a>
            </div>
            <div class="row add_bottom_30">
                @foreach($data['halls'] as $hall)
                    <div class="col-lg-3 col-sm-6">
                        <a href="hall/{{$hall->id}}" class="grid_item small">
                            <figure>

                                <img src="{{ asset($hall->photos[0]->path) }}" alt="" />
                                <div class="info">
                                    <h3>{{$hall->name}}</h3>

                                </div>
                            </figure>
                        </a>
                    </div>
                @endforeach


            </div>
            <!-- /row -->


            <!-- /row -->
        </div>
        <!-- /container -->

        <div class="call_section">
            <div class="wrapper">
                <div class="container margin_80_55">
                    <div class="main_title_2">
                        <span><em></em></span>
                        <h2>How it Works</h2>
                        <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box_how">
                                <i class="pe-7s-search"></i>
                                <h3>Search Locations</h3>
                                <p>
                                    An nec placerat repudiare scripserit, temporibus
                                    complectitur at sea, vel ignota fierent eloquentiam id.
                                </p>
                                <span></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box_how">
                                <i class="pe-7s-info"></i>
                                <h3>View Location Info</h3>
                                <p>
                                    An nec placerat repudiare scripserit, temporibus
                                    complectitur at sea, vel ignota fierent eloquentiam id.
                                </p>
                                <span></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box_how">
                                <i class="pe-7s-like2"></i>
                                <h3>Book, Reach or Call</h3>
                                <p>
                                    An nec placerat repudiare scripserit, temporibus
                                    complectitur at sea, vel ignota fierent eloquentiam id.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                    <p
                        class="text-center add_top_30 wow bounceIn"
                        data-wow-delay="0.5s"
                    >
                        <a href="account.html" class="btn_1 rounded">Register Now</a>
                    </p>
                </div>
                <canvas id="hero-canvas" width="1920" height="1080"></canvas>
            </div>
            <!-- /wrapper -->
        </div>
        <!--/call_section-->


        <!-- /container -->
    </main>
@endsection
