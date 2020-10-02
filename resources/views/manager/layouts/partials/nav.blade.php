<nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
    <a class="navbar-brand" href="/dashboard"><div align="center" style="padding-top: 2%"><h4 > Hotilianto  {{$role == 'administrator' ? 'Super Admin' : 'Manager'}}</h4></div></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
                <a class="nav-link" href="{{$role == 'administrator' ? route('bookings.index') : route('managerBookings')}}">
                    <i class="fa fa-fw fa-calendar-check-o"></i>
                    <span class="nav-link-text">Bookings</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Banquet">
                <a class="nav-link" href="{{$role == 'administrator' ? route('hall.create') : route('managerAddHall')}}">
                    <i class="fa fa-fw fa-plus-circle"></i>
                    <span class="nav-link-text">Add Banquet</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">

                <a class="nav-link" href="{{$role == 'administrator' ? route('hall.index') : route('showManagerHalls')}}">
                    <i class="fa fa-fw fa-list"></i>
                    <span class="nav-link-text">Halls</span>
                </a>
            </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reviews">

                <a class="nav-link" href="{{$role == 'administrator' ? route('review.index') : route('showManagerReview')}}">
                    <i class="fa fa-fw fa-star"></i>
                    <span class="nav-link-text">Reviews</span>
                </a>
            </li>

@if($role == 'administrator')

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reviews">

                <a class="nav-link" href="{{route('users.index') }}">
                    <i class="fa fa-fw fa-users"></i>
                    <span class="nav-link-text">Users</span>
                </a>
            </li>
            @endif


            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
                <a class="nav-link" href="{{route('profile.show')}}">
                    <i class="fa fa-fw fa-user"></i>
                    <span class="nav-link-text">My Profile</span>
                </a>
            </li>

        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left " style="color:#212529;"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">

            <li >
                <a class="nav-link  mr-lg-2" href="{{route('home')}}" >
                  <i class="fa fa-globe">

                  </i>


                </a>
           </li>



            <form method="POST" action="{{ route('logout') }}">
                @csrf
            <li class="nav-item">
                <button type="submit" class="btn-sm btn-danger">
                <div class="nav-link " style="color: white" >

                    <i class="fa fa-fw fa-sign-out"></i>Logout</div>
                </button>
            </li>
            </form>
        </ul>
    </div>
</nav>
