@extends('frontend.layouts.master')
@section('content')
    <main>
        <div class="hero_in hotels_detail"
        style="background:url({{
    asset($data[0]['photos'][0]->path)
}}) center center no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover"
        >
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
                                        <i class="icon_star" style="color: @if($rattings['ratting_round_off']<3) orange @else green @endif"></i>
                                @endfor

                                @if(5-$rattings['ratting_round_off'] > 0)
                                    @for($i= 1;$i<=5-$rattings['ratting_round_off'];$i++)
                                            <i class="icon_star" style="color: gainsboro"></i>
                                    @endfor
                                @endif

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

                        <div class="reviews-container" >

                            @foreach($data[0]['rattings'] as $ratting)
                                <div class="review-box clearfix ">

                                    <div class="rev-content">


                                        <div class="rating">
                                            @for($i= 1;$i<=$ratting['value'];$i++)
                                                @if($i>5)
                                                    @break(0);
                                                @endif
                                                <i class="icon_star" style="color: @if($ratting['value']<3) orange @else green @endif"></i>
                                            @endfor

                                            @if(5-$ratting['value'] > 0)
                                                @for($i= 1;$i<=5-$ratting['value'];$i++)
                                                    <i class="icon_star" style="color: gainsboro"></i>
                                                @endfor
                                            @endif

                                        </div>
                                        <div class="rev-info">
                                            {{$ratting['person_name']}} – {{$ratting['created_at']->format('l jS \\of F Y h:i:s A')}}
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                              {{$ratting['person_review']}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                        <!-- /review-container -->
                    </section>
                    <!-- /section -->
                    <hr>

                    <div class="add-review">
                        <h5>Leave a Review</h5>
                        <form action="{{route('publicReviewPost')}}" method="post"  id="reviewForm">
                            {{ csrf_field()}}
                            <input type="hidden" name="halls_id" value="{{$data[0]['id']}}" >
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Name and Lastname *</label>
                                    <input type="text" required name="person_name" id="person_name" placeholder="" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email *</label>
                                    <input type="email" required name="person_email" id="person_email" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Rating </label>
                                    <div class="custom-select-form">
                                        <select name="value" id="value" class="wide">
                                            <option value="1">1 (lowest)</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5" selected="">5 (Higgest)</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Your Review</label>
                                    <textarea required name="review_text" id="review_text" class="form-control" style="height:130px;"></textarea>
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
                            <span>{{$data[0]['price_per_guest']}} PKR <small>person</small></span>
                            <div class="score"><span><em>{{count($data[0]['rattings'])}} Reviews</em></span><strong>{{$rattings['ratting']}}</strong></div>
                        </div>


                        <input class="date form-control " type="text" name="date_requested" placeholder="Select Date">
                        <div style="height: 10px">

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
                        @if(Auth::check())

                            @if(Auth::user()->roles[0]->name == 'administrator')

                                <li><a href="/dashboard" class="btn_add">Dashboard</a></li>
                            @elseif(Auth::user()->roles[0]->name == 'manager')
                                <li><a href="/dashboard" class="btn_add">Dashboard</a></li>
                            @elseif(Auth::user()->roles[0]->name == 'user')
                                <button class="add_top_30 btn_1 full-width purchase get-qoute">GET QOUTE</button>
                            @endif
                        @else
                            <a href="/login" >
                            <button class="add_top_30 btn_1 full-width purchase ">Login</button>
                            </a>

                        @endif


                        <div class="text-center"><small>No money charged in this step</small></div>
                    </div>

                </aside>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->

    </main>
    <script type="text/javascript">
        $('.date').datepicker({
            format: 'mm/dd/yyyy'
        });
    </script>

    <script>
        $('.get-qoute').on('click', function (event) {
            var jobs = {!! json_encode($data) !!};
            console.log(jobs[0]['price_per_guest']);
            var pricePerGuest = jobs[0]['price_per_guest'];
            var total_guests = $('#qty_total').text();
            var amount = parseInt(total_guests) * pricePerGuest;

            var data_req = $('.date').val();
            event.preventDefault();
            const url = $(this).attr('href');
            swal({
                title: 'Are you sure?',
                text: 'Price of the booking will be '  +amount+ '  PKR !',
                icon: 'info',
                buttons: ["Cancel", "Send Booking Request!"],
            }).then(function(value) {

                if(total_guests <= 0 ){
                    swal({
                        title: 'Select Guest',
                        text: 'Guest quantity must be greater than 0 ',
                        icon: 'warning',
                        buttons: [ "OK!"],
                    })
                }
                else {
                    if (value) {
                        var formData = new FormData();
                        formData.append("_token", "{{ csrf_token() }}");
                        formData.append("hall_id","{{$data[0]['id']}}");
                        formData.append("guest_qty",total_guests);
                        formData.append("date_requested",data_req);
                        formData.append('_method', 'POST')

                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': "{{ csrf_token() }}"
                            },
                            url: '/user/bookings',
                            data: formData,
                            contentType: false,
                            processData: false,
                            type: 'POST',
                            success: function ( data ) {
                                if(data['status'] == 200){
                                    swal({
                                        title: 'Booking is Placed',
                                        text: 'Your Booking ID is : '+data['booking_id'],
                                        icon: 'success',
                                        buttons: [ "OK!"],
                                    })
                                }
                                else {
                                    swal({
                                        title: 'Try again',
                                        text: 'Internal server error try again',
                                        icon: 'danger',
                                        buttons: ["OK!"],
                                    })
                                }

                                console.log(data);
                                // alert( json.stringify(data) );
                            }
                        });
                        // window.location.href = url;
                    }
                }

            });
        });
    </script>
@endsection


