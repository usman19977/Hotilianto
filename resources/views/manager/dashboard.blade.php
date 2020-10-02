@extends('manager.layouts.master')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>

        </ol>
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card dashboard text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-envelope-open"></i>
                        </div>
                        <div class="mr-5"><h5>{{$total_halls}} Total Halls</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{$role == 'administrator' ? route('hall.index') : route('showManagerHalls')}}">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card dashboard text-white bg-info o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-star"></i>
                        </div>
                        <div class="mr-5"><h5>{{$total_reviews}} Total Reviews</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{$role == 'administrator' ? route('review.index') : route('showManagerReview')}}">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card dashboard text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-star"></i>
                        </div>
                        <div class="mr-5"><h5>{{$total_approved_reviews}} Approved Reviews</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{$role == 'administrator' ? route('review.index') : route('showManagerReview')}}">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card dashboard text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-star"></i>
                        </div>
                        <div class="mr-5"><h5>{{$total_rejected_reviews}} Rejected Reviews</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{$role == 'administrator' ? route('review.index') : route('showManagerReview')}}">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card dashboard text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-star"></i>
                        </div>
                        <div class="mr-5"><h5>{{$total_pending_reviews}} Pending Reviews</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{$role == 'administrator' ? route('review.index') : route('showManagerReview')}}">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>



            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card dashboard text-white bg-dark o-hidden h-100" >
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-calendar-check-o"></i>
                        </div>
                        <div class="mr-5"><h5>{{$total_bookings}} Total Bookings</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{$role == 'administrator' ? route('bookings.index') : route('managerBookings')}}">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card dashboard text-white bg-default o-hidden h-100" >
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-calendar-check-o"></i>
                        </div>
                        <div class="mr-5"><h5>{{$today_bookings}} Today Bookings</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{$role == 'administrator' ? route('bookings.index') : route('managerBookings')}}">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card dashboard text-white bg-success o-hidden h-100" >
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-calendar-check-o"></i>
                        </div>
                        <div class="mr-5"><h5>{{$approved_booking}} Approved Bookings</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{$role == 'administrator' ? route('bookings.index') : route('managerBookings')}}">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card dashboard text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-calendar-check-o"></i>
                        </div>
                        <div class="mr-5"><h5>{{$pending_bookings}} Pending Bookings</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{$role == 'administrator' ? route('bookings.index') : route('managerBookings')}}">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card dashboard text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-calendar-check-o"></i>
                        </div>
                        <div class="mr-5"><h5>{{$rejected_bookings}} Rejected Bookings</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{$role == 'administrator' ? route('bookings.index') : route('managerBookings')}}">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
@if($role == 'administrator')
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card dashboard text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-users"></i>
                        </div>
                        <div class="mr-5"><h5>{{$total_users}} Total Users</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{route('users.index')}}">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card dashboard text-white bg-info o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-users"></i>
                        </div>
                        <div class="mr-5"><h5>{{$total_admins_role}} Total Admins</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{route('users.index')}}">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card dashboard text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-users"></i>
                        </div>
                        <div class="mr-5"><h5>{{$total_managers_role}} Total Managers</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{route('users.index')}}">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card dashboard text-white bg-dark o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-users"></i>
                        </div>
                        <div class="mr-5"><h5>{{$total_users_role}} Total Users Role</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{route('users.index')}}">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            @endif
        </div>
        <!-- /cards -->
        <h2></h2>
        <div class="box_general padding_bottom">
            <div class="header_box version_2">
                <h2 style="color: black"><i class="fa fa-bar-chart"></i>Booking Details</h2>
            </div>
           <div style="width: 100%">
                {!! $usersChart->container() !!}
            </div>
        </div>
    </div>
    <!-- /.container-fluid-->
</div>

@if($usersChart)
    {!! $usersChart->script() !!}
@endif
@endsection
