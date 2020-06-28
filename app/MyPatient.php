<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyPatient extends Model
{
    //
    /**
     * @var array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Request|mixed|string
     */
    private $email;
    private $name;
    private $phone;
    private $condition;
    private $date_birth;
    private $date_admit;
    private $type_patient;
    private $date_appt;
    private $time_appt;
    private $price;
    private $address;
    private $city;
    private $region;

}
