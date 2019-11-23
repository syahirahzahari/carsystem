<?php
use App\car_price;
use App\car;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('car', 'CarpriceController@getlistcar')->name('car.index');

   

Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
        return view('car/searchyear')->withDetails($user)->withQuery ( $q );
    else return view ('car/searchyear')->withMessage('No Details found. Try to search again !');
});