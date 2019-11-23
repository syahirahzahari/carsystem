<?php

namespace App;
use App\car_price;

use Illuminate\Database\Eloquent\Model;

class Car_price extends Model
{
    // protected $guarded = [];
    // protected $table = 'car_price';

    public static function carprice(){
        return \DB::table('car_price as c')
                ->select('car.car_name as uname', 'c.price', 'c.id', 'c.year', 'c.car_id')
                ->leftJoin('car', 'c.car_id', '=', 'car.id')
                ->get();
    }
}
