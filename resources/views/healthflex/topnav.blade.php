
<div class="header">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6 col-sm-6 hidden-xs hidden-sm text-left">
                <div class="top_menu_container">
                    <ul id="menu-top-bar" class="top_menu hover_menu">
                        <li id="menu-item-1774"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1774"><a
                                title="FAQ" href="/faq/">FAQ</a></li>
                        <li id="menu-item-1775"
                            class="hidden menu-item menu-item-type-post_type menu-item-object-page menu-item-1775"><a
                                title="Fees &amp; Insurance" href="/fees-insurance/">Fees &#038; Insurance</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 hidden-xs hidden-sm text-right">
                <i class="fa fa-ambulance"></i> Emergency Line <strong>(+555) 959-595-959</strong></div>


        </div><!-- row -->
    </div><!-- container -->

    <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">


                    <li class="menu-item  mr-4">
                        <a href="{{ url('/sherzod') }}">
                            <h3 style="color: #0f3e68">MY&nbspBEST<span style="color: #00A8FF">DOCTOR</span></h3>
                        </a>
                    </li>

                </ul>
                <ul class="navbar-nav main-nav ml-auto">
                    <li class="menu-item mr-4"><a class="nav-link" title="About Us" href="/about-us/">About Us </a></li>
                    <li class="nav-item mr-4"><a class="nav-link" title="Careers" href="/careers/"> Careers </a></li>
                    <li class="menu-item mr-4"><a class="nav-link" title="Departments" href="/departments/">Departments</a></li>
                    <li id="menu-item-1771" class="menu-item mr-4"><a class="nav-link" title="Services" href="/services/">Services</a>
                    </li>
                    <li id="menu-item-1674" class="menu-item mr-4 has-submenu"><a class="nav-link" title="Info" href="#">Info </a>
                        <ul role="menu" class="submenu">
                            <li><a class="nav-link" title="The Patient&#039;s &amp; Visitor&#039;s Guide" href="/visit-guide/">The
                                    Patient&#8217;s &#038; Visitor&#8217;s Guide</a></li>
                            <li><a class="nav-link" title="Appointment Booking" href="/appointment-booking/">Appointment Booking</a></li>
                            <li><a class="nav-link" title="Health Plans" href="/health-plans/">Health Plans</a></li>
                            <li><a class="nav-link" title="Health Library A-Z" href="/health-library/">Health Library A-Z</a></li>
                            <li><a class="nav-link" title="Fees &amp; Insurance" href="/fees-insurance/">Fees &#038; Insurance</a></li>
                            <li><a class="nav-link" title="FAQ" href="/faq/">FAQ</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('doctor.login') }}">{{ __('Doctor Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <ul class="main-nav">
                            <li class="has-submenu">
                                <a href="#">
                                    <img
                                        src="/healthflex_files/uploads/avatars/{{ Auth::guard('doctor')->user()->avatar }}"
                                        alt="User Image"
                                        style="width: 32px; height: 32px; position: relative; border-radius: 50%; right: 10px">
                                    {{ Auth::guard('doctor')->user()->name }} <i
                                        class="fas fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="{{ ('dashboard') }}">{{ _('Doctors Dashboard') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ ('profile-settings') }}">{{ _('Profile Settings') }}</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @endguest
                </ul>
            </div>

        </div>
    </nav>



    @include('healthflex.alljavascriptfiles')
</div>
</div>
