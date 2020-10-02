@extends('frontend.layouts.master')
@section('content')

    <main style="padding-bottom: 5% ; padding-top: 5%; ">

        <div class="container margin_60_35 " >
            <div class="box_booking">


                <!-- /strip booking -->
@foreach($bookings as $singleBook)
                    <div class="strip_booking">
                        <div class="row">
                            <div class="col-lg-2 col-md-2">
                                <div class="date">
                                    @if($singleBook->status == 1)
                                        <span class="month bg-success" >Status</span>
                                        <span class="day"><strong style="
color: #1c7430;
font-size: large;
">Approved</strong>{{$singleBook->updated_at}}</span>
                                    @elseif($singleBook->status == 0)
                                        <span class="month bg-warning" >Status</span>
                                        <span class="day"><strong
                                                style="color: #ffdd7a;font-size: large;">Pending</strong>
                                            {{$singleBook->updated_at}}</span>
                                    @elseif($singleBook->status == 2)
                                        <span class="month bg-danger" >Status</span>
                                        <span class="day"><strong
                                                style="color: #ff4114;font-size: large;"
                                            >Rejected</strong>{{$singleBook->updated_at}}</span>
                                    @endif

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5">
                                <h3 class="restaurant_booking">{{$singleBook->hall->name}}
                                    <span ><b>Guest Quantity Hall</b>   {{$singleBook->hall->guest_range}} </span>

                                    <span ><b>Persons Booked</b>   {{$singleBook->guest_qty}} </span>


                                    <span ><b>Price Per Person</b>  {{$singleBook->hall->price_per_guest}}  PKR</span>

                                    <span ><b>Price Booked</b>  {{$singleBook->guest_qty  * $singleBook->hall->price_per_guest}}  PKR</span>
                                </h3>
                            </div>
                            <div class="col-lg-2 col-md-3">
                                <ul class="info_booking">
                                    <li><strong>Booking id</strong> {{$singleBook->id}}</li>
                                    <li><strong>Booked on</strong> {{$singleBook->created_at}}</li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="booking_buttons">
                                    <a target="_blank" href="/hall/{{$singleBook->hall->id}}" class="btn_2">View Banquet</a>

                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                @endforeach

                <!-- /strip booking -->
            </div>
            <!-- /box_booking -->

        </div>

        <!-- /container -->
    </main>

@endsection

