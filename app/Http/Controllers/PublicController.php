<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Doctor_list;

class PublicController extends Controller
{
    public function sherzod(Request $request){
        $doctorlist = "";
        return view("healthflex.sherzod", compact('doctorlist'));
        //$airports = Airport::where('country', 'like', $request->keyword.'%')->select('country')->groupBy('country')->get()
    }
    public function search(Request $request){
        $cityKey = $request->cityKey;
        $key = $request->key;

        $doctors = Doctor_list::where('speciality_title', 'LIKE', '%'.$key.'%')->
        where('location', 'LIKE', '%'.$cityKey.'%')->
        orWhere('doctors_name', 'LIKE', '%'.$key.'%')->
        where('location', 'LIKE', '%'.$cityKey.'%')->
        orWhere('speciality_type', 'LIKE', '%'.$key.'%')->
        where('location', 'LIKE', '%'.$cityKey.'%')->get();



        return view('healthflex.search', compact('doctors'));


    }

    /*

    $num = $request->question;
        if ($num != ''){
            $questions = \App\Question::where('id' ,$num)->get();
            //return $questions;
            return view('test',compact('questions'));}
        else{
            $questions = \App\Question::all();
            //return $questions;
            return view('test',compact('questions'));}
    }






        public function lists(Request $request) {
        $where = 'country';
        $value = 'Uzbekistan';
        if ($request->select){
            $where = $request->select;
        }
        if ($request->country){
            $value = $request->country;
        }
        $airports=  Airport::where($where, $value)->get();
        return view('jontoshmatov.airports')->with('airports', $airports);
    }

    public function keywordsearch(Request $request){
        $airports = Airport::where('country', 'like', $request->keyword.'%')->select('country')->groupBy('country')->get();
        return $airports;
    }
    */

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
