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

                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="mb-4">Patient Appoinment</h4>
                                <div class="appointment-tab">

                                    <!-- Appointment Tab -->
                                    <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#upcoming-appointments" data-toggle="tab">Upcoming</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#today-appointments" data-toggle="tab">Today</a>
                                        </li>
                                    </ul>
                                    <!-- /Appointment Tab -->

                                    <div class="tab-content">

                                        <!-- Upcoming Appointment Tab -->
                                        <div class="tab-pane show active" id="upcoming-appointments">
                                            <div class="card card-table mb-0">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-center mb-0">
                                                            <thead>
                                                            <tr>
                                                                <th>Patient Name</th>
                                                                <th>Appt Date</th>
                                                                <th>Purpose</th>
                                                                <th>Type</th>
                                                                <th class="text-center">Paid Amount</th>
                                                                <th></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="patient-profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/healthflex_files/assets/img/patients/patient.jpg" alt="User Image"></a>
                                                                        <a href="patient-profile">Richard Wilson <span>#PT0016</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>11 Nov 2019 <span class="d-block text-info">10.00 AM</span></td>
                                                                <td>General</td>
                                                                <td>New Patient</td>
                                                                <td class="text-center">$150</td>
                                                                <td class="text-right">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>

                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                            <i class="fas fa-check"></i> Accept
                                                                        </a>
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                            <i class="fas fa-times"></i> Cancel
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="patient-profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/healthflex_files/assets/img/patients/patient1.jpg" alt="User Image"></a>
                                                                        <a href="patient-profile">Charlene Reed <span>#PT0001</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>3 Nov 2019 <span class="d-block text-info">11.00 AM</span></td>
                                                                <td>General</td>
                                                                <td>Old Patient</td>
                                                                <td class="text-center">$200</td>
                                                                <td class="text-right">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>

                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                            <i class="fas fa-check"></i> Accept
                                                                        </a>
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                            <i class="fas fa-times"></i> Cancel
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="patient-profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/healthflex_files/assets/img/patients/patient2.jpg" alt="User Image"></a>
                                                                        <a href="patient-profile">Travis Trimble  <span>#PT0002</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>1 Nov 2019 <span class="d-block text-info">1.00 PM</span></td>
                                                                <td>General</td>
                                                                <td>New Patient</td>
                                                                <td class="text-center">$75</td>
                                                                <td class="text-right">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>

                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                            <i class="fas fa-check"></i> Accept
                                                                        </a>
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                            <i class="fas fa-times"></i> Cancel
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="patient-profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/healthflex_files/assets/img/patients/patient3.jpg" alt="User Image"></a>
                                                                        <a href="patient-profile">Carl Kelly <span>#PT0003</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>30 Oct 2019 <span class="d-block text-info">9.00 AM</span></td>
                                                                <td>General</td>
                                                                <td>Old Patient</td>
                                                                <td class="text-center">$100</td>
                                                                <td class="text-right">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>

                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                            <i class="fas fa-check"></i> Accept
                                                                        </a>
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                            <i class="fas fa-times"></i> Cancel
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="patient-profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/healthflex_files/assets/img/patients/patient4.jpg" alt="User Image"></a>
                                                                        <a href="patient-profile">Michelle Fairfax <span>#PT0004</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>28 Oct 2019 <span class="d-block text-info">6.00 PM</span></td>
                                                                <td>General</td>
                                                                <td>New Patient</td>
                                                                <td class="text-center">$350</td>
                                                                <td class="text-right">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>

                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                            <i class="fas fa-check"></i> Accept
                                                                        </a>
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                            <i class="fas fa-times"></i> Cancel
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="patient-profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/healthflex_files/assets/img/patients/patient5.jpg" alt="User Image"></a>
                                                                        <a href="patient-profile">Gina Moore <span>#PT0005</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>27 Oct 2019 <span class="d-block text-info">8.00 AM</span></td>
                                                                <td>General</td>
                                                                <td>Old Patient</td>
                                                                <td class="text-center">$250</td>
                                                                <td class="text-right">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>

                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                            <i class="fas fa-check"></i> Accept
                                                                        </a>
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                            <i class="fas fa-times"></i> Cancel
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Upcoming Appointment Tab -->

                                        <!-- Today Appointment Tab -->
                                        <div class="tab-pane" id="today-appointments">
                                            <div class="card card-table mb-0">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-center mb-0">
                                                            <thead>
                                                            <tr>
                                                                <th>Patient Name</th>
                                                                <th>Appt Date</th>
                                                                <th>Purpose</th>
                                                                <th>Type</th>
                                                                <th class="text-center">Paid Amount</th>
                                                                <th></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="patient-profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/healthflex_files/assets/img/patients/patient6.jpg" alt="User Image"></a>
                                                                        <a href="patient-profile">Elsie Gilley <span>#PT0006</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>14 Nov 2019 <span class="d-block text-info">6.00 PM</span></td>
                                                                <td>Fever</td>
                                                                <td>Old Patient</td>
                                                                <td class="text-center">$300</td>
                                                                <td class="text-right">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>

                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                            <i class="fas fa-check"></i> Accept
                                                                        </a>
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                            <i class="fas fa-times"></i> Cancel
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="patient-profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/healthflex_files/assets/img/patients/patient7.jpg" alt="User Image"></a>
                                                                        <a href="patient-profile">Joan Gardner <span>#PT0006</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>14 Nov 2019 <span class="d-block text-info">5.00 PM</span></td>
                                                                <td>General</td>
                                                                <td>Old Patient</td>
                                                                <td class="text-center">$100</td>
                                                                <td class="text-right">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>

                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                            <i class="fas fa-check"></i> Accept
                                                                        </a>
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                            <i class="fas fa-times"></i> Cancel
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="patient-profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/healthflex_files/assets/img/patients/patient8.jpg" alt="User Image"></a>
                                                                        <a href="patient-profile">Daniel Griffing <span>#PT0007</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>14 Nov 2019 <span class="d-block text-info">3.00 PM</span></td>
                                                                <td>General</td>
                                                                <td>New Patient</td>
                                                                <td class="text-center">$75</td>
                                                                <td class="text-right">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>

                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                            <i class="fas fa-check"></i> Accept
                                                                        </a>
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                            <i class="fas fa-times"></i> Cancel
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="patient-profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/healthflex_files/assets/img/patients/patient9.jpg" alt="User Image"></a>
                                                                        <a href="patient-profile">Walter Roberson <span>#PT0008</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>14 Nov 2019 <span class="d-block text-info">1.00 PM</span></td>
                                                                <td>General</td>
                                                                <td>Old Patient</td>
                                                                <td class="text-center">$350</td>
                                                                <td class="text-right">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>

                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                            <i class="fas fa-check"></i> Accept
                                                                        </a>
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                            <i class="fas fa-times"></i> Cancel
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="patient-profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/healthflex_files/assets/img/patients/patient10.jpg" alt="User Image"></a>
                                                                        <a href="patient-profile">Robert Rhodes <span>#PT0010</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>14 Nov 2019 <span class="d-block text-info">10.00 AM</span></td>
                                                                <td>General</td>
                                                                <td>New Patient</td>
                                                                <td class="text-center">$175</td>
                                                                <td class="text-right">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>

                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                            <i class="fas fa-check"></i> Accept
                                                                        </a>
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                            <i class="fas fa-times"></i> Cancel
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="patient-profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/healthflex_files/assets/img/patients/patient11.jpg" alt="User Image"></a>
                                                                        <a href="patient-profile">Harry Williams <span>#PT0011</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>14 Nov 2019 <span class="d-block text-info">11.00 AM</span></td>
                                                                <td>General</td>
                                                                <td>New Patient</td>
                                                                <td class="text-center">$450</td>
                                                                <td class="text-right">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>

                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                                            <i class="fas fa-check"></i> Accept
                                                                        </a>
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                            <i class="fas fa-times"></i> Cancel
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Today Appointment Tab -->

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
@include('healthflex.alljavascriptfiles')
    </div>
    </body>

@endsection
