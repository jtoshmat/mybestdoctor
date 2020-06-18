
@extends('healthflex.master')
@section('title', 'Shortcodes')
@section('content')

    <body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/sherzod') }}">
                    <h3 style="color: #0f3e68">MY&nbspBEST<span style="color: #00A8FF">DOCTOR</span></h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

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
                                <li class="has-submenu active">
                                    <a href="#" >
                                        <img src="/healthflex_files/uploads/avatars/{{ Auth::guard('doctor')->user()->avatar }}" alt="User Image" style="width: 32px; height: 32px; position: relative; border-radius: 50%; right: 10px">
                                        {{ Auth::guard('doctor')->user()->name }} <i class="fas fa-chevron-down"></i></a>
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

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
            </div>
        </nav>
        <!-- Page Content -->
        <div class="content">
            <div class="container-fluid">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

                        <!-- Profile Sidebar -->
                        <div class="profile-sidebar">
                            <div class="widget-profile pro-widget-content">
                                <div class="profile-info-widget">
                                    <a href="#" class="booking-doc-img">
                                        <img src="/healthflex_files/uploads/avatars/{{ Auth::guard('doctor')->user()->avatar }}" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3>DR.{{ Auth::guard('doctor')->user()->name }}</h3>

                                        <div class="patient-details">
                                            <h5 class="mb-0">{{ Auth::guard('doctor')->user()->speciality_title }}</h5>
                                        </div>
                                        <div class="patient-details">
                                            <h5 class="mb-0">Tel: {{ Auth::guard('doctor')->user()->phone }}</h5>
                                        </div>
                                        <div class="patient-details">
                                            <h5 class="mb-0">{{ Auth::guard('doctor')->user()->email }}</h5>
                                        </div>
                                        <div class="patient-details">
                                            <h5 class="mb-0">{{ Auth::guard('doctor')->user()->address }} {{ Auth::guard('doctor')->user()->city }} {{ Auth::guard('doctor')->user()->region }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-widget">
                                <nav class="dashboard-menu">
                                    <ul>
                                        <li class="{{ Request::path() === 'doctor/dashboard' ? 'active' : '' }}">
                                            <a href="{{ route('doctor.dashboard') }}">
                                                <i class="fas fa-columns"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="{{ Request::path() ==='doctor/appointments' ? 'active' : '' }}">
                                            <a href="{{ route('doctor.appointments') }}">
                                                <i class="fas fa-calendar-check"></i>
                                                <span>Appointments</span>
                                            </a>
                                        </li>
                                        <li class="{{ Request::path() ==='doctor/mypatients' ? 'active' : '' }}">
                                            <a href="{{ route('doctor.mypatients') }}">
                                                <i class="fas fa-user-injured"></i>
                                                <span>My Patients</span>
                                            </a>
                                        </li>
                                        <li class="{{ Request::path() ==='doctor/schedule-timings' ? 'active' : '' }}">
                                            <a href="{{ route('doctor.schedule-timings') }}">
                                                <i class="fas fa-hourglass-start"></i>
                                                <span>Schedule Timings</span>
                                            </a>
                                        </li>
                                        <li class="{{ Request::path() ==='doctor/invoices' ? 'active' : '' }}">
                                            <a href="{{ route('doctor.invoices') }}">
                                                <i class="fas fa-file-invoice"></i>
                                                <span>Invoices</span>
                                            </a>
                                        </li>
                                        <li class="{{ Request::path() ==='doctor/profile-settings' ? 'active' : '' }}">
                                            <a href="{{ route('doctor.profile-settings') }}">
                                                <i class="fas fa-user-cog"></i>
                                                <span>Profile Settings</span>
                                            </a>
                                        </li>
                                        <li class="{{ Request::path() ==='doctor/change-password' ? 'active' : '' }}">
                                            <a href="{{ route('doctor.change-password') }}">
                                                <i class="fas fa-lock"></i>
                                                <span>Change Password</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i class="fas fa-sign-out-alt"></i>
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- /Profile Sidebar -->


                    </div>



                    <div class="col-md-7 col-lg-8 col-xl-9">


                       @yield('sub-content')

                    </div>

                </div>

            </div>

        </div>
@include('healthflex.alljavascriptfiles')
    </div>
    </body>

@endsection
