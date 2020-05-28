<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Doctor_list;

class PublicController extends Controller
{
    public function sherzod(Request $request){
        return view("healthflex.sherzod", compact('doctorlist'));
        //$airports = Airport::where('country', 'like', $request->keyword.'%')->select('country')->groupBy('country')->get()
    }
    public function search(Request $request){
        $keyword = $request->keyword;
        $doctorlist = Doctor_list::where('doctors_name','like','%'.$keyword.'%')
            ->orWhere('speciality_type','like','%'.$keyword.'%')
            ->orWhere('speciality_title','like','%'.$keyword.'%')->get();
        return view("healthflex.search", compact('doctorlist'));
    }

    public function search2(Request $request){
        if($request->keyword && $request->city){
        $keyword = $request->keyword;
        $city = $request->city;
        $doctorlist = Doctor_list::where('doctors_name','like','%'.$keyword.'%')
            ->where('location', 'like', '%'.$city.'%')
            ->orWhere('speciality_type','like','%'.$keyword.'%')
            ->where('location', 'like', '%'.$city.'%')
            ->orWhere('speciality_title','like','%'.$keyword.'%')
            ->where('location', 'like', '%'.$city.'%')->get();
        return view("healthflex.search", compact('doctorlist'));
        }
        elseif($request->keyword && $request->city == null ){
            $keyword = $request->keyword;
            $doctorlist = Doctor_list::orwhere('doctors_name','like','%'.$keyword.'%')
                ->orWhere('speciality_type','like','%'.$keyword.'%')
                ->orWhere('speciality_title','like','%'.$keyword.'%')->get();
            return view("healthflex.search", compact('doctorlist'));
        }
        elseif($request->keyword == null && $request->city){
            $city = $request->city;
            $doctorlist = Doctor_list::where('location', 'like', '%'.$city.'%')->get();
            return view("healthflex.search", compact('doctorlist'));
        }
        else{
            $doctorlist = Doctor_list::All();
            return view("healthflex.search", compact('doctorlist'));
        }
    }


    public function khursan(){
        $sayHello = "Jon aka says Hello!";
        return view("healthflex.khursan", compact('sayHello'));
    }
    public function khursand(){
        $hello = "Greeting";
        return view("healthflex.khursand", compact('hello'));
    }

    public function register2(){
        $hello = "Greeting";
        return view("healthflex.register", compact('hello'));
    }

    public function patientRegister(){
        $hello = "Greeting";
        return view("healthflex.patient-register", compact('hello'));
    }


}
