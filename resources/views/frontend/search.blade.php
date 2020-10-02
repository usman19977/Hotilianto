@extends('frontend.layouts.master')
@section('content')

    <!-- /header -->


    <main>




        <!-- /Map -->

        <div class="container margin_60_35">
            <div class="row">
                <aside class="col-lg-3" id="sidebar">
                    <form method="get" action="/search">
                    <div id="filters_col">
                        <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters </a>
                        <div class="collapse show" id="collapseFilters">
                            <div class="filter_type">
                                <h6>Category</h6>
                                <ul>
                                    @foreach($venue_types as $type)
                                        <li>
                                            <label class="container_check">{{$type->name}}
                                                <input type="radio" name="filter[venuetype_id]">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    @endforeach


                                </ul>
                            </div>

                            <div class="filter_type">
                                <h6>Cities</h6>
                                <ul>
                                    @foreach($cities as $city)
                                        <li>
                                            <label class="container_check">{{$city->name}}
                                                <input type="radio" name="filter[city_id]" value="{{$city->id}}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    @endforeach


                                </ul>
                            </div>
                            <div class="filter_type">
                                <h6>Price Range</h6>
                                <div class="distance">  <span></span> PKR per person</div>
                                <input type="range" min="0" max="100000" step="10" value="0" data-orientation="horizontal"  name="filter[price_per_guest]">
                            </div>


                            <div class="filter_type">
                                <h6>Rating</h6>
                                <ul>
                                    <li>
                                        <label class="container_check">Superb 5+
                                            <input type="radio" name="filter[ratting]" value="5">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Very Good 4+
                                            <input type="radio" name="filter[ratting]" value="4">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Good 3+
                                            <input type="radio" name="filter[ratting]" value="3">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Pleasant 2+
                                            <input type="radio" name="filter[ratting]" value="2">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>

                                    <li>
                                        <label class="container_check">Average 1+
                                            <input type="radio" name="filter[ratting]" value="1">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <input type="submit" class="add_top_30 btn_1 full-width purchase get-qoute" value="SEARCH">
                        </div>
                        <!--/collapse -->
                    </div>
                       </form>
                    <!--/filters col-->
                </aside>
                <!-- /aside -->

                <div class="col-lg-9">
                    @if(count($halls) <= 0)
                        <h1> NO RESULTS FOUND</h1>
                    @else
                    @foreach($halls as $hall)
                    <div class="strip list_view">
                        <div class="row no-gutters">
                            <div class="col-lg-5">
                                <figure>
                                    <a href="/hall/{{$hall->id}}"><img src="{{asset($hall->photos[0]->path)}}" class="img-fluid" alt=""><div class="read_more"><span>Read more</span></div></a>
                                    <small>{{$hall->venuetype->name}}</small>
                                </figure>
                            </div>
                            <div class="col-lg-7">
                                <div class="wrapper">

                                    <h3><a href="/hall/{{$hall->id}}">{{$hall->name}}</a></h3>
                                    <small>{{$hall->address}}</small>
                                    <p>{{$hall->detail}}</p>

                                    <a class="address"  href="https://maps.google.com/?q={{$hall['address']}}">Get directions</a>
                                </div>
                                <ul>
                                    <li><span class="loc_open">Now Open</span></li>
                                    <li><div class="score"><span><em>{{count($hall->rattings)}} Reviews</em></span><strong>{{$hall->ratting}}</strong></div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /strip list_view -->
                    @endforeach
                    @endif
                </div>
                <!-- /col -->
            </div>
        </div>
        <!-- /container -->

    </main>

@endsection


