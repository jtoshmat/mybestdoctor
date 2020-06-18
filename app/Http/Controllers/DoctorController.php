<?php

namespace App\Http\Controllers;

use App\MyPatient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;


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
        $myPatients = MyPatient::orderBy('created_at','desc')->paginate(10);
        return view('healthflex.doctor.doctor', compact('myPatients'));
    }

    public function profile_settings()
    {
        return view('healthflex.doctor.profile-settings');
    }

    public function update_avatar(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users',

        ]);

        //handle upload file
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $target = public_path('healthflex_files/uploads/avatars/' . $filename);

            Image::make($avatar)->resize(300, 300)->save($target);
        }


            $user = Auth::guard('doctor')->user();
            $user->avatar = $filename;

            $user->name = request('name');
            $user->speciality_title = request('speciality_title');
            $user->phone = request('phone');
            $user->address = request('address');
            $user->city = request('city');
            $user->region = request('region');
            $user->email = request('email');


            $user->save();
            return redirect('doctor/profile-settings')->with('status', 'Profile updated!');



//        return redirect('doctor/profile-settings');
    }

    public function change_password()
    {
        return view('healthflex.doctor.change-password');
    }

    public function update_password(Request $request)
    {


        if (!(Hash::check($request->get('old_password'), Auth::guard('doctor')->user()->password))) {
            // The passwords not matches
            $this->validate($request, [
                'old_password' => 'required',
                'new_password' => 'required|string|min:6|confirmed',
                'password_confirm' => 'required'
            ]);
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");

        }
        //uncomment this if you need to validate that the new password is same as old one

        if(strcmp($request->get('old_password'), $request->get('new_password')) == 0){
            //Current password and new password are same

           return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }


        //Change Password
        $user = Auth::guard('doctor')->user();
        $user->password = Hash::make($request->get('new_password'));
        $user->save();
        return redirect('doctor/change-password')->with('status', 'Profile updated!');
        return view('healthflex.doctor.doctor');
    }


    public function invoices()
    {
        return view('healthflex.doctor.invoices');
    }

}
