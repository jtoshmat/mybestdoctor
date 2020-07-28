@extends('healthflex.doctor.layout')
@section('title', 'details for' . $patient->name)

@section('sub-content')
@include('healthflex.allcssfiles')

    <!-- start admited invoice list -->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card  card-box">
                <div class="profile-det-info">
                    <h3 class="patient-details text-center">{{'Details for patient:'}} <span  style="color:#343434">{{ $patient->name }}</span></h3>
                </div>
                <div class="form-group text-center">
                    <p>Date Of Appointment: <strong class="text-success">{{ $patient->date_appt }} {{ $patient->time_appt }}</strong></p>
                </div>
                <div class="card-body ">
                    <div class="row">




                            <div class="invoice-box">
                                <table cellpadding="0" cellspacing="0">
                                    <tr class="top">
                                        <td colspan="2">
                                            <table>
                                                <tr>
                                                    <td class="title">
                                                        <h4 style="color: #0f3e68">MY&nbsp;BEST<span style="color: #00A8FF">DOCTOR</span></h4>
                                                    </td>

                                                    <td>
                                                        {{ _('Invoice and Patient #: P') }}{{ $patient->patient_id }}<br>
                                                        {{ _('Created on:') }} {{ $patient->created_at }}<br>
                                                        {{ _('Due Date:') }} {{ $patient->date_admit }}
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <tr class="information">
                                        <td colspan="2">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <strong>Doctor: </strong>
                                                        DR.{{ Auth::guard('doctor')->user()->name }}<br>
                                                        {{ Auth::guard('doctor')->user()->address }} <br>
                                                        {{ Auth::guard('doctor')->user()->city }} {{ Auth::guard('doctor')->user()->region }}<br>
                                                        {{ Auth::guard('doctor')->user()->speciality_title }}<br>
                                                        {{ Auth::guard('doctor')->user()->phone }}<br>
                                                        {{ Auth::guard('doctor')->user()->email }}
                                                    </td>
                                                    <td>
                                                        <strong>Patient: </strong>
                                                        {{ $patient->name }}<br>
                                                        {{ $patient->address }}<br>
                                                        {{ $patient->city }} {{ $patient->region }}<br>
                                                        {{ $patient->phone }}<br>
                                                        {{ $patient->email }}<br>
                                                        Date of birth: {{ $patient->date_birth }}<br>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr class="heading">
                                        <td>Payment Method</td>
                                        <td></td>
                                    </tr>
                                    <tr class="details">
                                        <td>Cash</td>
                                        <td></td>
                                    </tr>
                                    <tr class="heading">
                                        <td>Patient Description</td>
                                        <td>Price</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $patient->type_patient }}</td>
                                        <td></td>
                                    </tr>
                                    <tr class="item">
                                        <td>{{ $patient->condition }}</td>

                                        <td>{{ $patient->price }}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr class="total">
                                        <td></td>
                                        <td>Total: {{ $patient->price }}</td>
                                    </tr>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end admited invoice list -->

    <!doctype html>
    <html>
    <head>






@endsection
