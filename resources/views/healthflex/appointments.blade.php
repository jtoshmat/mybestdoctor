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
                                    <a href="#">Doctors <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">
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
{{--                                <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }}--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
                        @endguest
                    </ul>
                </div>
                </div>
            </div>
        </nav>
        <!-- Page Content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

                        <!-- Profile Sidebar -->
                        <div class="profile-sidebar">
                            <div class="widget-profile pro-widget-content">
                                <div class="profile-info-widget">
                                    <a href="#" class="booking-doc-img">
                                        <img src="/healthflex_files/assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3>Dr. Darren Elder</h3>

                                        <div class="patient-details">
                                            <h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-widget">
                                <nav class="dashboard-menu">
                                    <ul>
                                        <li class="{{ Request::path() ==='doctor/dashboard' ? 'active' : '' }}">
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
                                        <li class="{{ Request::path() ==='my-patients' ? 'active' : '' }}">
                                            <a href="{{ route('doctor.my-patients') }}">
                                                <i class="fas fa-user-injured"></i>
                                                <span>My Patients</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('doctor.schedule-timings') }}">
                                                <i class="fas fa-hourglass-start"></i>
                                                <span>Schedule Timings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('doctor.invoices') }}">
                                                <i class="fas fa-file-invoice"></i>
                                                <span>Invoices</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="reviews">
                                                <i class="fas fa-star"></i>
                                                <span>Reviews</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('doctor.profile-settings') }}">
                                                <i class="fas fa-user-cog"></i>
                                                <span>Profile Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="doctor-change-password">
                                                <i class="fas fa-lock"></i>
                                                <span>Change Password</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/sherzod">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
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
                        <!-- appointment row -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-topline-red">
                                            <div class="card-head">
                                                <header></header>
                                                <div class="tools">
                                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                                </div>
                                            </div>
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="btn-group">
                                                            <a href="book_appointment_material.html" id="addRow"
                                                               class="btn btn-info">
                                                                Add New <i class="fa fa-plus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="btn-group pull-right">
                                                            <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                                               data-toggle="dropdown">Tools
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-print"></i> Print </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table-scrollable">
                                                    <table class="table table-hover table-checkable order-column full-width"
                                                           id="example4">
                                                        <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th> Name </th>
                                                            <th> Email </th>
                                                            <th> Date Of Appointment </th>
                                                            <th> From </th>
                                                            <th> To </th>
                                                            <th> Mobile </th>
                                                            <th> Consulting Doctor </th>
                                                            <th>Injury/Condition</th>
                                                            <th> Action </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user6.jpg" alt="">
                                                            </td>
                                                            <td>Jenish shah</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">07:15</td>
                                                            <td class="center">07:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Fever</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user1.jpg" alt="">
                                                            </td>
                                                            <td>Pankaj Singh</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">07:45</td>
                                                            <td class="center">08:00</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Sarah Smith</td>
                                                            <td>Malaria</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javasctipt()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user2.jpg" alt="">
                                                            </td>
                                                            <td>Jenish shah</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">08:15</td>
                                                            <td class="center">08:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Fever</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user3.jpg" alt="">
                                                            </td>
                                                            <td>Pankaj Singh</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">08:45</td>
                                                            <td class="center">08:00</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Sarah Smith</td>
                                                            <td>Malaria</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user4.jpg" alt="">
                                                            </td>
                                                            <td>Jenish shah</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">09:00</td>
                                                            <td class="center">09:15</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Fever</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user6.jpg" alt="">
                                                            </td>
                                                            <td>Pankaj Singh</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">09:30</td>
                                                            <td class="center">09:45</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Sarah Smith</td>
                                                            <td>Malaria</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user5.jpg" alt="">
                                                            </td>
                                                            <td>Jenish shah</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">09:45</td>
                                                            <td class="center">10:00</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Cholera</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user8.jpg" alt="">
                                                            </td>
                                                            <td>Pankaj Singh</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">10:15</td>
                                                            <td class="center">10:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Fever</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user7.jpg" alt="">
                                                            </td>
                                                            <td>Jenish shah</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">11:15</td>
                                                            <td class="center">11:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Malaria</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user9.jpg" alt="">
                                                            </td>
                                                            <td>Pankaj Singh</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">07:15</td>
                                                            <td class="center">07:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Fever</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user6.jpg" alt="">
                                                            </td>
                                                            <td>Pankaj Singh</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">07:15</td>
                                                            <td class="center">07:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Jay Soni</td>
                                                            <td>Cholera</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user2.jpg" alt="">
                                                            </td>
                                                            <td>Jenish shah</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">07:15</td>
                                                            <td class="center">07:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Malaria</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user3.jpg" alt="">
                                                            </td>
                                                            <td>Pankaj Singh</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">07:15</td>
                                                            <td class="center">07:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Jay Soni</td>
                                                            <td>Fever</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user5.jpg" alt="">
                                                            </td>
                                                            <td>Jenish shah</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">07:15</td>
                                                            <td class="center">07:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Cholera</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user4.jpg" alt="">
                                                            </td>
                                                            <td>Sneha Pandya</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">07:15</td>
                                                            <td class="center">07:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Malaria</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user7.jpg" alt="">
                                                            </td>
                                                            <td>Jenish shah</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">07:15</td>
                                                            <td class="center">07:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Jay Soni</td>
                                                            <td>Fever</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user8.jpg" alt="">
                                                            </td>
                                                            <td>Sneha Pandya</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">07:15</td>
                                                            <td class="center">07:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Cholera</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user9.jpg" alt="">
                                                            </td>
                                                            <td>Pooja Patel</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">07:15</td>
                                                            <td class="center">07:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Malaria</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user6.jpg" alt="">
                                                            </td>
                                                            <td>Jenish shah</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">07:15</td>
                                                            <td class="center">07:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Fever</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user2.jpg" alt="">
                                                            </td>
                                                            <td>Sneha Pandya</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">07:15</td>
                                                            <td class="center">07:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Cholera</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user5.jpg" alt="">
                                                            </td>
                                                            <td>Sneha Pandya</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">07:15</td>
                                                            <td class="center">07:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Fever</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user7.jpg" alt="">
                                                            </td>
                                                            <td>Pooja Patel</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">07:15</td>
                                                            <td class="center">07:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Fever</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user4.jpg" alt="">
                                                            </td>
                                                            <td>Jenish shah</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">07:15</td>
                                                            <td class="center">07:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Cholera</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user9.jpg" alt="">
                                                            </td>
                                                            <td>Sneha Pandya</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">07:15</td>
                                                            <td class="center">07:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Fever</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user8.jpg" alt="">
                                                            </td>
                                                            <td>Pooja Patel</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">07:15</td>
                                                            <td class="center">07:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Cholera</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user6.jpg" alt="">
                                                            </td>
                                                            <td>Jenish shah</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">07:15</td>
                                                            <td class="center">07:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Fever</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user5.jpg" alt="">
                                                            </td>
                                                            <td>Sneha Pandya</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">07:15</td>
                                                            <td class="center">07:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Fever</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user7.jpg" alt="">
                                                            </td>
                                                            <td>Pooja Patel</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">07:15</td>
                                                            <td class="center">07:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Cholera</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="img/user/user9.jpg" alt="">
                                                            </td>
                                                            <td>Sneha Pandya</td>
                                                            <td><a href="mailto:shuxer@gmail.com">
                                                                    jenish@gmail.com </a></td>
                                                            <td class="center">12 Jan 2012</td>
                                                            <td class="center">07:15</td>
                                                            <td class="center">07:30</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td>Dr.Rajesh</td>
                                                            <td>Fever</td>
                                                            <td>
                                                                <a href="edit_appointment.html" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javascript()" class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <!-- end appointment row -->

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
