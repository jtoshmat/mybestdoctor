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
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <ul class="main-nav">
                                <li class="has-submenu active">
                                    <a href="#">{{ Auth::guard('doctor')->user()->name  }}<i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="{{ ('dashboard') }}">Doctors Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="{{ ('profile-settings') }}">Profile Settings</a>
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
        </div>
    </nav>


    <div class="container">
        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <div class="user-avatar">
                                    <img
                                        src="/healthflex_files/uploads/avatars/{{ Auth::guard('doctor')->user()->avatar }}"
                                        style="width: 150px; height: 150px; border-radius: 50% " alt="">
                                </div>
                                <h2>{{ Auth::guard('doctor')->user()->name  }}<span style="font-weight: normal">'s Profile</span></span>
                                </h2>
                                <div class="form-group">{{ Auth::guard('doctor')->user()->email  }}</div>
                            </div>
                            <div class="setting-links">
                                <div class="form-group">{{ Auth::guard('doctor')->user()->speciality_title }}</div>
                                <div class="form-group">Phone Number</div>
                                <div class="form-group">Phone Number</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-8 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Update Profile</div>
                    </div>
                    <div class="card-body">
                        <div class="row gutters">
                            <form enctype="multipart/form-data" action="profile-settings" method="POST">
                                @csrf
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Full Name</label>
                                        <input type="text" class="form-control" id="fullName"
                                               placeholder="Enter full name">
                                    </div>
                                    <div class="form-group">
                                        <label for="eMail">Email</label>
                                        <input type="email" class="form-control" id="eMail"
                                               placeholder="Enter email ID">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone"
                                               placeholder="Enter phone number">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Upload profile picture</label>
                                        <input type="file" class="form-control" name="avatar">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="addRess">Address</label>
                                        <input type="text" class="form-control" id="addRess"
                                               placeholder="Enter Address">
                                    </div>
                                    <div class="form-group">
                                        <label for="ciTy">City</label>
                                        <input type="text" class="form-control" id="ciTy" placeholder="Enter City">
                                    </div>
                                    <div class="form-group">
                                        <label for="sTate">State</label>
                                        <input type="text" class="form-control" id="sTate"
                                               placeholder="Enter State">
                                    </div>
                                    <div class="form-group">
                                        <label for="zIp">ZIP</label>
                                        <input type="number" class="form-control" id="zIp"
                                               placeholder="Website ZIP">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        <button type="button" id="cancel" name="cancel" class="btn btn-light">Cancel
                                        </button>
                                        <button type="submit" id="submit2" name="submit" class="btn btn-primary">
                                            Submit
                                            Form
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('healthflex.alljavascriptfiles')
    </div>

</body>

@endsection
