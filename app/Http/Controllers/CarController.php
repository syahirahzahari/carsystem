<?php

namespace App\Http\Controllers;
use App\car;



use Illuminate\Http\Request;

class CarController extends Controller
{
    //
    public static function car(){
        return \DB::table('car')
                ->select('car_name')
                ->get();
    }
}
