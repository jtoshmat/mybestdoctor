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
                                    <a href="#">{{ Auth::guard('doctor')->user()->name }} <i class="fas fa-chevron-down"></i></a>
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
                        @include('healthflex.doctor.doctor-profile-sidebar')
                        <!-- /Profile Sidebar -->

                    </div>



                    <div class="col-md-7 col-lg-8 col-xl-9">


                        <div class="row">
                            <div class="col-md-12">
                                <div class="card dash-card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-4">
                                                <div class="dash-widget dct-border-rht">
                                                    <div class="circle-bar circle-bar1">
                                                        <div class="circle-graph1" data-percent="75">
                                                            <img src="/healthflex_files/assets/img/icon-01.png" class="img-fluid" alt="patient">
                                                        </div>
                                                    </div>
                                                    <div class="dash-widget-info">
                                                        <h6>Total Patient</h6>
                                                        <h3>1500</h3>
                                                        <p class="text-muted">Till Today</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-4">
                                                <div class="dash-widget dct-border-rht">
                                                    <div class="circle-bar circle-bar2">
                                                        <div class="circle-graph2" data-percent="65">
                                                            <img src="/healthflex_files/assets/img/icon-02.png" class="img-fluid" alt="Patient">
                                                        </div>
                                                    </div>
                                                    <div class="dash-widget-info">
                                                        <h6>Today Patient</h6>
                                                        <h3>160</h3>
                                                        <p class="text-muted">06, Nov 2019</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-4">
                                                <div class="dash-widget">
                                                    <div class="circle-bar circle-bar3">
                                                        <div class="circle-graph3" data-percent="50">
                                                            <img src="/healthflex_files/assets/img/icon-03.png" class="img-fluid" alt="Patient">
                                                        </div>
                                                    </div>
                                                    <div class="dash-widget-info">
                                                        <h6>Appoinments</h6>
                                                        <h3>85</h3>
                                                        <p class="text-muted">06, Apr 2019</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- start admited patient list -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="card  card-box">
                                    <div class="card-head">
                                        <header>ADMIT PATIENT LIST</header>
                                    </div>
                                    <div class="card-body ">
                                        <div class="table-wrap">
                                            <div class="table-responsive">
                                                <table class="table display product-overview mb-30" id="support_table">
                                                    <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Name</th>
                                                        <th>Date of Birth</th>
                                                        <th>Date Of Admit</th>
                                                        <th>Diseases</th>
                                                        <th>Room No</th>
                                                        <th>Edit</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Jens Brincker</td>
                                                        <td>08/20/1970</td>
                                                        <td>27/05/2016</td>
                                                        <td>
                                                            <span class="label label-sm label-success">Influenza</span>
                                                        </td>
                                                        <td>101</td>
                                                        <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                               title="Edit"><i class="fa fa-check"></i></a>
                                                            <a href="javascript:void(0)" class="text-inverse"
                                                               title="Delete" data-toggle="tooltip"><i
                                                                    class="fa fa-trash-o"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Mark Hay</td>
                                                        <td>Dr. Mark</td>
                                                        <td>26/05/2017</td>
                                                        <td>
                                                            <span class="label label-sm label-warning"> Cholera </span>
                                                        </td>
                                                        <td>105</td>
                                                        <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                               title="Edit"><i class="fa fa-check"></i></a>
                                                            <a href="javascript:void(0)" class="text-inverse"
                                                               title="Delete" data-toggle="tooltip"><i
                                                                    class="fa fa-trash"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Anthony Davie</td>
                                                        <td>Dr.Cinnabar</td>
                                                        <td>21/05/2016</td>
                                                        <td>
															<span
                                                                class="label label-sm label-success ">Amoebiasis</span>
                                                        </td>
                                                        <td>106</td>
                                                        <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                               title="Edit"><i class="fa fa-check"></i></a>
                                                            <a href="javascript:void(0)" class="text-inverse"
                                                               title="Delete" data-toggle="tooltip"><i
                                                                    class="fa fa-trash-o"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>David Perry</td>
                                                        <td>Dr.Felix </td>
                                                        <td>20/04/2016</td>
                                                        <td>
                                                            <span class="label label-sm label-danger">Jaundice</span>
                                                        </td>
                                                        <td>105</td>
                                                        <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                               title="Edit"><i class="fa fa-check"></i></a>
                                                            <a href="javascript:void(0)" class="text-inverse"
                                                               title="Delete" data-toggle="tooltip"><i
                                                                    class="fa fa-trash"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Anthony Davie</td>
                                                        <td>Dr.Beryl</td>
                                                        <td>24/05/2016</td>
                                                        <td>
															<span
                                                                class="label label-sm label-success ">Leptospirosis</span>
                                                        </td>
                                                        <td>102</td>
                                                        <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                               title="Edit"><i class="fa fa-check"></i></a>
                                                            <a href="javascript:void(0)" class="text-inverse"
                                                               title="Delete" data-toggle="tooltip"><i
                                                                    class="fa fa-trash"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Alan Gilchrist</td>
                                                        <td>Dr.Joshep</td>
                                                        <td>22/05/2016</td>
                                                        <td>
                                                            <span class="label label-sm label-warning ">Hepatitis</span>
                                                        </td>
                                                        <td>103</td>
                                                        <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                               title="Edit"><i class="fa fa-check"></i></a>
                                                            <a href="javascript:void(0)" class="text-inverse"
                                                               title="Delete" data-toggle="tooltip"><i
                                                                    class="fa fa-trash"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Mark Hay</td>
                                                        <td>Dr.Jayesh</td>
                                                        <td>18/06/2016</td>
                                                        <td>
                                                            <span class="label label-sm label-success ">Typhoid</span>
                                                        </td>
                                                        <td>107</td>
                                                        <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                               title="Edit"><i class="fa fa-check"></i></a>
                                                            <a href="javascript:void(0)" class="text-inverse"
                                                               title="Delete" data-toggle="tooltip"><i
                                                                    class="fa fa-trash"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>Sue Woodger</td>
                                                        <td>Dr.Sharma</td>
                                                        <td>17/05/2016</td>
                                                        <td>
                                                            <span class="label label-sm label-danger">Malaria</span>
                                                        </td>
                                                        <td>108</td>
                                                        <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                                               title="Edit"><i class="fa fa-check"></i></a>
                                                            <a href="javascript:void(0)" class="text-inverse"
                                                               title="Delete" data-toggle="tooltip"><i
                                                                    class="fa fa-trash"></i></a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end admited patient list -->

                    </div>

                </div>

            </div>

        </div>
@include('healthflex.alljavascriptfiles')
        <!-- /Page Content -->
{{--        <main class="py-4">--}}
{{--            <div class="container">--}}
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col-md-8">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-header">DOCTOR DASHBOARD</div>--}}

{{--                            <div class="card-body">--}}
{{--                                @if (session('status'))--}}
{{--                                    <div class="alert alert-success" role="alert">--}}
{{--                                        {{ session('status') }}--}}
{{--                                    </div>--}}
{{--                                @endif--}}

{{--                                You are logged in as <strong>DOCTOR</strong>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </main>--}}
    </div>
    </body>

@endsection
