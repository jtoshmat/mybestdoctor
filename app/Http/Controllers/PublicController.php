<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
