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

    public function invoices()
    {
        $myPatients = MyPatient::orderBy('created_at','desc')->paginate(7);
        return view( 'healthflex.doctor.invoices', compact('myPatients'));
    }

    public function appointments()
    {
        $myPatients = MyPatient::orderBy('created_at','desc')->paginate(7);
        return view('healthflex.doctor.appointments', compact('myPatients'));
    }


    public function show($patient)
    {
        $patient = MyPatient::find($patient);
        return view( 'healthflex.doctor.show', compact('patient'));
    }

    public function add_patient()
    {
        return view('healthflex.doctor.add-patient');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'patient_id' => 'nullable',
            'name' => 'required|min:3|max:20',
            'email' => 'email:rfc,dns',
            'phone' => 'required',
            'date_birth' => 'required',
            'date_admit' => 'required',
            'date_appt' => 'required',
            'time_appt' => 'required',
            'type_patient' => 'nullable',
            'condition' => 'required',
            'price' => 'nullable',
            'address' => 'required',
            'city' => 'nullable',
            'region' => 'nullable'
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
        return redirect('doctor/mypatients')->with('status', 'New Patient added!');
//        event(new NewPatientHasRegistered());
//        Mail::to($myPatients->email)->send(new WelcomeNewUserMail());

    }


}
