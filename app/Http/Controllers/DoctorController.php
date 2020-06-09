<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;


class DoctorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:doctor');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('healthflex.doctor');
    }

    public function profile_settings()
    {
        return view('healthflex.profile-settings');
    }

    public function update_avatar(Request $request)
    {
        //handle upload file
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $target = public_path('healthflex_files/uploads/avatars/' . $filename);

//           dd($avatar, $filename, $target);
            Image::make($avatar)->resize(300, 300)->save($target);

            $user = Auth::guard('doctor')->user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('healthflex.profile-settings');
    }

    public function appointments()
    {
        return view('healthflex.appointments');
    }

    public function my_patients()
    {
        return view('healthflex.my-patients');
    }

    public function schedule_timings()
    {
        return view('healthflex.schedule-timings');
    }

    public function invoices()
    {
        return view('healthflex.invoices');
    }

}
