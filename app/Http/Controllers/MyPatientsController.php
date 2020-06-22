<?php

namespace App\Http\Controllers;

use App\MyPatient;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Auth;

class MyPatientsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:doctor');
    }


    public function my_patients()
    {
        $myPatients = MyPatient::orderBy('created_at','desc')->paginate(7);
        return view( 'healthflex.doctor.mypatients', compact('myPatients'));
    }

    public function appointments()
    {
        $myPatients = MyPatient::orderBy('created_at','desc')->paginate(7);
        return view('healthflex.doctor.appointments', compact('myPatients'));
    }

    public function schedule_timings()
    {
        $myPatients = MyPatient::orderBy('created_at','desc')->paginate(7);
        return view('healthflex.doctor.schedule-timings', compact('myPatients'));
    }

    public function add_patient()
    {
        return view('healthflex.doctor.add-patient');
    }
}
