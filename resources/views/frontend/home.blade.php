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
                    <form method="get" action="/search">
                        <div class="row no-gutters custom-search-input-2">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input
                                        class="form-control"
                                        type="text"
                                        name="filter[name]"
                                        placeholder="What are you looking for..."
                                    />
                                    <i class="icon_search"></i>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <select class="wide" name="filter[venuetype_id]">

                                        @foreach($data['venue_types'] as $venuetype)
                                            <option value="{{$venuetype->id}}">{{$venuetype->name}}</option>
                                        @endforeach

                                    </select>

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <select class="wide" name="filter[city_id]">

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
                            <a href="/search?filter[venuetype_id]={{$venueType->id}}">
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
                <a href="/search">See all</a>
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
                        <p>Search what you need , place booking , banquet manager will call you</p>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box_how">
                                <i class="pe-7s-search"></i>
                                <h3>Search Banquets</h3>
                                <p>
                                    Search banquets according to your needs,
                                    you can search by location , type , ratting , & by guest quantity.
                                </p>
                                <span></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box_how">
                                <i class="pe-7s-info"></i>
                                <h3>View Banquet Info</h3>
                                <p>
                                  You can get location , photos , ratting , reviews , now you can place booking on some clicks by just providing date of occasion , & guest quantity
                                </p>
                                <span></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box_how">
                                <i class="pe-7s-like2"></i>
                                <h3>Book, Reach or Call</h3>
                                <p>
                                  After you place booking , banquet manager will check and approve that booking for you , you will be notified by  manager call ,
                                    place booking get your function done in desired banquet now
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                    <p
                        class="text-center add_top_30 wow bounceIn"
                        data-wow-delay="0.5s"
                    >
             @if(\Illuminate\Support\Facades\Auth::check())
                        <a href="/dashboard" class="btn_1 rounded">Track your queries</a>



                        @else
                            <a href="/login" class="btn_1 rounded">Register Now</a>
                        @endif
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
