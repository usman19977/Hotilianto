@if(Route::current()->getName()=== 'dashboard')
    <header class="header menu_fixed">
        {{--    class="header_in is_sticky menu_fixed"--}}

        <div id="logo">
            <a href="/" title="Hotilianto - Banquet Booking & Listing">
                <img
                    src="{{asset('/img/banquet-26690.svg')}}"
                    width="165"
                    height="35"
                    alt=""
                    class="logo_normal"
                />
                <img
                    src="{{asset('/img/banquet-26690.svg')}}"
                    width="165"
                    height="35"
                    alt=""
                    class="logo_sticky"
                />
            </a>
        </div>
        <ul id="top_menu">

            @if(Auth::check())
                <li><a href="/user/profile" class="btn_add" >Profile</a></li>
                @if(Auth::user()->roles[0]->name == 'administrator')

                    <li><a href="/dashboard" class="btn_add" >Dashboard</a></li>
                @elseif(Auth::user()->roles[0]->name == 'manager')
                    <li><a href="/dashboard" class="btn_add" >Dashboard</a></li>
                @elseif(Auth::user()->roles[0]->name == 'user')
                    <li><a href="/dashboard" class="btn_add" >View Bookings</a></li>
                @endif

            @else
                <li><a href="/login" class="btn_add">Login</a></li>
            @endif



        </ul>
        <!-- /top_menu -->
        <a href="#menu" class="btn_mobile">
            <div class="hamburger hamburger--spin" id="hamburger">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
        </a>
        <nav id="menu" class="main-menu">
            <ul>
                <li>
            <a href="/">Home</a>

                </li>
                <li>
                 <a href="/listing">Listings</a>

                </li>
                <li>
                 <a href="/about">About</a>

                </li>

                <li>
           <a href="/contact">
                        Contact
                    </a>

                </li>


            </ul>
        </nav>
    </header>

@else
    <header class="header menu_fixed">


            <div id="logo">
                <a href="/" title="Hotilianto - Banquet Booking & Listing">
                    <img
                        src="{{asset('/img/banquet-26690.svg')}}"
                        width="165"
                        height="35"
                        alt=""
                        class="logo_normal"
                    />
                    <img
                        src="{{asset('/img/banquet-26690.svg')}}"
                        width="165"
                        height="35"
                        alt=""
                        class="logo_sticky"
                    />
                </a>
            </div>
        <ul id="top_menu">

            @if(Auth::check())
                <li><a href="/user/profile" class="btn_add" >Profile</a></li>
                @if(Auth::user()->roles[0]->name == 'administrator')

                    <li><a href="/dashboard" class="btn_add">Dashboard</a></li>
                @elseif(Auth::user()->roles[0]->name == 'manager')
                    <li><a href="/dashboard" class="btn_add">Dashboard</a></li>
                @elseif(Auth::user()->roles[0]->name == 'user')
                    <li><a href="/dashboard" class="btn_add">View Bookings</a></li>
                @endif
            @else
                <li><a href="/login" class="btn_add">Login</a></li>
            @endif



        </ul>
        <!-- /top_menu -->
        <a href="#menu" class="btn_mobile">
            <div class="hamburger hamburger--spin" id="hamburger">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
        </a>
        <nav id="menu" class="main-menu">
            <ul>
                <li>
                    <span><a href="/">Home</a></span>

                </li>
                <li>
                    <span><a href="/search">Listings</a></span>

                </li>
                <li>
                    <span><a href="/about">About</a></span>

                </li>

                <li>
                <span><a href="/contact">
                        Contact
                    </a></span>

                </li>


            </ul>
        </nav>
    </header>
@endif


