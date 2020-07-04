<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;

;

use Illuminate\Http\Request;
use App\Doctor_list;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function sherzod()
    {
        $sayHello = "Jon aka says Hello!";
        return view("healthflex.sherzod", compact('sayHello'));
    }

    public function khursan()
    {
        $sayHello = "Jon aka says Hello!";
        return view("healthflex.khursan", compact('sayHello'));
    }

    public function khursand()
    {
        $hello = "Greeting";
        return view("healthflex.khursand", compact('hello'));
    }


    public function search(Request $request)
    {
        $cityKey = $request->cityKey;
        $key = $request->key;


        if (filled($cityKey) || filled($key)) {
            $doctors = Doctor_list::where('speciality_title', 'LIKE', '%' . $key . '%')->
            where('location', 'LIKE', '%' . $cityKey . '%')->
            orWhere('doctors_name', 'LIKE', '%' . $key . '%')->
            where('location', 'LIKE', '%' . $cityKey . '%')->
            orWhere('speciality_type', 'LIKE', '%' . $key . '%')->
            where('location', 'LIKE', '%' . $cityKey . '%')->
            paginate(4);
        }
        return view('healthflex.search', [
            'doctors' => $doctors ?? []
        ]);


    }

}
