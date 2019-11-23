<?php

namespace App;
use App\car;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public static function car(){
        return \DB::table('car')
        ->select('car_name')->groupby('car_name')
        ->get();

    }
}
