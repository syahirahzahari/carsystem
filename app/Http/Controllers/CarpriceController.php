<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use App\car_price;
use App\car;


class CarpriceController extends Controller
{
    //
    public function getlistcar()
    {
    // $carprice = car_price::orderBy('updated_at','desc')->get();
    // dd ($action);
    $data['car_price'] = Car_price::carprice();
    $data['car'] = Car::car();
    return view('car/index', $data);
    //  return view('car.index')->with(['carprice' => $carprice]) ;
    }

    public function search()
    {
        $q = Input::get ( 'q' );
        $car = car_price::where('year','LIKE','%'.$q.'%')->get();
        if(count($car) > 0)
            return view('car/searchyear')->withDetails($car)->withQuery ( $q );
        else return view ('car/searchyear')->withMessage('No Details found. Try to search again !');
    }
}
