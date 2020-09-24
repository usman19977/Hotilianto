@extends('frontend.layouts.master')
@section('content')
    <main>
        <div class="hero_in hotels_detail">
            <div class="wrapper">
				<span class="magnific-gallery">
				 @foreach($data[0]['photos'] as $photo)
                        <a href="{{asset($photo->path)}}" class="btn_photos" title="Photo title" data-effect="mfp-zoom-in">View photos</a>

                    @endforeach
                </span>
            </div>
        </div>
        <!--/hero_in-->

        <nav class="secondary_nav sticky_horizontal_2">
            <div class="container">
                <ul class="clearfix">
                    <li><a href="#description" class="active">Description</a></li>
                    <li><a href="#reviews">Reviews</a></li>
                    <li><a href="#sidebar">Booking</a></li>
                </ul>
            </div>
        </nav>

        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-8">
                    <section id="description">
                        <div class="detail_title_1">
                            <div class="cat_star">
                                @for($i= 1;$i<=$rattings['ratting_round_off'];$i++)
                                    @if($i>5)
                                        @break(0);
                                    @endif
                                        <i class="icon_star" style="color: @if($rattings['ratting_round_off']<3) yellow @else green @endif"></i>
                                @endfor

                                @if(5-$rattings['ratting_round_off'] > 0)
                                    @for($i= 1;$i<=5-$rattings['ratting_round_off'];$i++)
                                            <i class="icon_star" style="color: gainsboro"></i>
                                    @endfor
                                @endif

{{--                                <i class="icon_star"></i>--}}
{{--                                <i class="icon_star"></i>--}}
{{--                                <i class="icon_star"></i>--}}
{{--                                <i class="icon_star"></i>--}}
                            </div>
                            <h1>{{$data[0]['name']}}</h1>
                            <a class="address" href="https://maps.google.com/?q={{$data[0]['address']}}">{{$data[0]['address']}}</a>
                        </div>
                       <p>{{$data[0]['details']}}</p>
                        <h5 class="add_bottom_15">Amenities</h5>
                        <div class="row add_bottom_30">

                            <div class="col-lg-6">
                                <ul class="bullets">
                                    @foreach($data[0]['ammenties'] as $amenty)
                                        <li>{{$amenty->name}}</li>
                                    @endforeach


                                </ul>
                            </div>

                        </div>
                        <!-- /row -->
                        <hr>


                        <h3>Prices / Capacity</h3>
                        <table class="table table-striped add_bottom_45">
                            <tbody>
                            <tr>
                                <td>Price per person</td>
                                <td>{{$data[0]['price_per_guest']}} RS</td>
                            </tr>
{{--                            <tr>--}}
{{--                                <td>Price per menu</td>--}}
{{--                                <td>{{$data[0]['menu']->per_head_rate}} RS</td>--}}
{{--                            </tr>--}}
                            <tr>
                                <td>Capacity</td>
                                <td>{{$data[0]['guest_range']}} Persons</td>

                            </tr>
                            </tbody>
                        </table>
                        <hr>
                        <h3>Location</h3>
                        <div  class="map map_single add_bottom_45">
                            <iframe src="https://maps.google.com/maps?q={{$data[0]['address']}}&output=embed" width="100%" height="100%" frameborder="5" style="border:0"></iframe>

                        </div>
                        <!-- End Map -->
                    </section>
                    <!-- /section -->

                    <section id="reviews">
                        <h2>Reviews</h2>
                        <div class="reviews-container add_bottom_30">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div id="review_summary">
                                        <strong>{{$rattings['ratting']}}</strong>

                                        <small>Based on {{count($data[0]['rattings'])}} reviews</small>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: {{$rattings['ratting_percentage_5star']}}%" aria-valuenow="{{$rattings['ratting_percentage_5star']}}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: {{$rattings['ratting_percentage_4star']}}%" aria-valuenow="{{$rattings['ratting_percentage_4star']}}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: {{$rattings['ratting_percentage_3star']}}%" aria-valuenow="{{$rattings['ratting_percentage_3star']}}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: {{$rattings['ratting_percentage_2star']}}%" aria-valuenow="{{$rattings['ratting_percentage_2star']}}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: {{$rattings['ratting_percentage_5star']}}%" aria-valuenow="{{$rattings['ratting_percentage_1star']}}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                </div>
                            </div>
                            <!-- /row -->
                        </div>

                        <div class="reviews-container col-12" >

                            <div class="review-box clearfix ">

                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Admin – April 03, 2016:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                            Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /review-box -->
                            <div class="review-box clearfix">

                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Ahsan – April 01, 2016:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                            Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /review-box -->
                            <div class="review-box clearfix">

                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Sara – March 31, 2016:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                            Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /review-box -->
                        </div>
                        <!-- /review-container -->
                    </section>
                    <!-- /section -->
                    <hr>

                    <div class="add-review">
                        <h5>Leave a Review</h5>
                        <form>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Name and Lastname *</label>
                                    <input type="text" name="name_review" id="name_review" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email *</label>
                                    <input type="email" name="email_review" id="email_review" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Rating </label>
                                    <div class="custom-select-form">
                                        <select name="rating_review" id="rating_review" class="wide">
                                            <option value="1">1 (lowest)</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5" selected="">5 (medium)</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10 (highest)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Your Review</label>
                                    <textarea name="review_text" id="review_text" class="form-control" style="height:130px;"></textarea>
                                </div>
                                <div class="form-group col-md-12 add_top_20 add_bottom_30">
                                    <input type="submit" value="Submit" class="btn_1" id="submit-review">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /col -->

                <aside class="col-lg-4" id="sidebar">
                    <div class="box_detail booking">
                        <div class="price">
                            <span>{{$data[0]['price_per_guest']}} RS <small>person</small></span>
                            <div class="score"><span><em>{{count($data[0]['rattings'])}} Reviews</em></span><strong>{{$rattings['ratting']}}</strong></div>
                        </div>

                        <div class="form-group" id="input-dates">
                            <input class="form-control" type="text" name="dates" placeholder="When..">
                            <i class="icon_calendar"></i>
                        </div>

                        <div class="dropdown">
                            <a href="#" data-toggle="dropdown">Guests <span id="qty_total">0</span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-menu-content">
                                    <label>Adults</label>
                                    <div class="qty-buttons">
                                        <input type="button" value="+" class="qtyplus" name="adults">
                                        <input type="text" name="adults" id="adults" value="0" class="qty">
                                        <input type="button" value="-" class="qtyminus" name="adults">
                                    </div>
                                </div>
                                <div class="dropdown-menu-content">
                                    <label>Childrens</label>
                                    <div class="qty-buttons">
                                        <input type="button" value="+" class="qtyplus" name="child">
                                        <input type="text" name="child" id="child" value="0" class="qty">
                                        <input type="button" value="-" class="qtyminus" name="child">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /dropdown -->


                        <a href="/checkout" class=" add_top_30 btn_1 full-width purchase">Purchase</a>
                        <div class="text-center"><small>No money charged in this step</small></div>
                    </div>

                </aside>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->

    </main>
@endsection

