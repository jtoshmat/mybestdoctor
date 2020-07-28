@extends('healthflex.doctor.layout')
@section('title', 'appointment')
@section('sub-content')

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
                                    <h3>{{ $myPatients->total() }}</h3>
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
                                    <h3>{{ $myPatients->count() }}</h3>
                                    <p class="text-muted">{{ date('m-d-y') }}</p>
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
                                    <h3>{{ $myPatients->count('date_appt') }}</h3>
                                    <p class="text-muted">{{ date('m-d-y') }}</p>
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
        <div class="col-md-12 col-sm-12">
            <div class="card  card-box">
                <div class="card-head">
                    <header class="pl-2">APPOINTMENT</header>
                </div>
                <div class="card-body ">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table class="table display product-overview mb-30" id="support_table">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th> Email</th>
                                    <th>Phone No</th>
                                    <th>Date of Appointment</th>
                                    <th>Time of Appointment</th>
                                    <th>Condition</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($myPatients as $patient)
                                    @php $label = array("label-success", "label-danger", "label-warning", "label-info", "label-primary");
                                        $randLabel = array_rand($label);
                                    @endphp
                                    <tr>
                                        <td>{{ $patient->id }}</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="patient-profile" class="avatar avatar-sm mr-2"><img
                                                        class="avatar-img rounded-circle"
                                                        src="/healthflex_files/uploads/avatars/{{ $patient->avatar }}"
                                                        style="height: 25px; width: 25px" alt=""></a>
                                                <a href="patient-profile">{{ $patient->name }}
                                                    <span>#P{{ $patient->patient_id }}</span></a>
                                            </h2>
                                        </td>
                                        <td>{{ $patient->email }}</td>
                                        <td>{{ $patient->phone }}</td>
                                        <td>{{ $patient->date_appt }}</td>
                                        <td>{{ $patient->time_appt }}</td>
                                        <td>
                                            <span
                                                class="label label-sm {{ $label[$randLabel] }}">{{ $patient->condition }}</span>
                                        </td>

                                        <td><a href="javascript:void(0)" class="" data-toggle="tooltip"
                                               title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0)" class="text-inverse"
                                               title="Delete" data-toggle="tooltip"><i
                                                    class="fa fa-trash"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-12 text-center">
                                    {{ $myPatients->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end appointment row -->


@endsection
