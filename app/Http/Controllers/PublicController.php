<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;;
use Illuminate\Http\Request;
use App\Doctor_list;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function sherzod(){
        $sayHello = "Jon aka says Hello!";
        return view("healthflex.sherzod", compact('sayHello'));
    }
    public function khursan(){
        $sayHello = "Jon aka says Hello!";
        return view("healthflex.khursan", compact('sayHello'));
    }
    public function khursand(){
        $hello = "Greeting";
        return view("healthflex.khursand", compact('hello'));
    }
    public function search(Request $request){
        $cityKey = $request->cityKey;
        $key = $request->key;


        $doctors = Doctor_list::where('speciality_title', 'LIKE', '%' . $key . '%')->
        where('location', 'LIKE', '%' . $cityKey . '%')->
        orWhere('doctors_name', 'LIKE', '%' . $key . '%')->
        where('location', 'LIKE', '%' . $cityKey . '%')->
        orWhere('speciality_type', 'LIKE', '%' . $key . '%')->
        where('location', 'LIKE', '%' . $cityKey . '%');


        switch (request('sortBy')) {
            case 'rate':
                $doctors->orderby('rate', 'desc');
                break;
            case 'Popular':
                $doctors->orderby('popular', 'asc');
                break;
            case 'Ohirgi':
                $doctors->orderby('ohirgi', 'asc');
                break;
            default:
                $doctors->orderby('id', 'asc');
                break;
        }

//complete the query and terminate it with paginate or ->get()
        $doctors = $doctors->paginate(5);
        return view('healthflex.search', compact('doctors'));


    }




}
