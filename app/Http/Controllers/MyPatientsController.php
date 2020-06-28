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
    public function store()
    {
        $data = \request()->validate([
            'name' => 'required|min:3',
            'patient_id' => 'required|min:4',
            'email' => 'required|unique',
            'phone' => 'required',
            'date_birth' => 'required',
            'date_admit' => 'required',
            'condition' => 'required',
            'address' => 'required',
            'city' => 'required'
        ]);


        $myPatients = new MyPatient();
        $myPatients->patient_id = request('patient_id');
        $myPatients->name = request('name');
        $myPatients->email = request('email');
        $myPatients->phone = request('phone');
        $myPatients->date_birth = request('date_birth');
        $myPatients->date_admit = request('date_admit');
        $myPatients->date_appt = request('date_appt');
        $myPatients->time_appt = request('time_appt');
        $myPatients->type_patient = request('type_patient');
        $myPatients->condition = request('condition');
        $myPatients->price = request('price');
        $myPatients->address = request('address');
        $myPatients->city = request('city');
        $myPatients->region = request('region');
        $myPatients->save();
        return view( 'healthflex.doctor.mypatients', compact('myPatients'));

    }

}
