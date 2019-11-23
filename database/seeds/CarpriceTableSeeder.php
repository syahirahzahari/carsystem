<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class CarpriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_price')->truncate();
        DB::table('car_price')->insert(
        [
                [
                    'year' => '2011',
                    'price' => '120000',
                    'car_id' => '1',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                [
                    'year' => '2012',
                    'price' => '121000',
                    'car_id' => '1',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                [
                    'year' => '2013',
                    'price' => '122000',
                    'car_id' => '1',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                [
                    'year' => '2014',
                    'price' => '123000',
                    'car_id' => '1',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                [
                    'year' => '2015',
                    'price' => '124000',
                    'car_id' => '1',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                [
                    'year' => '2011',
                    'price' => '130000',
                    'car_id' => '2',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                [
                    'year' => '2012',
                    'price' => '131000',
                    'car_id' => '2',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                [
                    'year' => '2013',
                    'price' => '132000',
                    'car_id' => '2',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                [
                    'year' => '2014',
                    'price' => '133000',
                    'car_id' => '2',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                [
                    'year' => '2015',
                    'price' => '134000',
                    'car_id' => '2',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                [
                    'year' => '2011',
                    'price' => '110000',
                    'car_id' => '3',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                [
                    'year' => '2012',
                    'price' => '111000',
                    'car_id' => '3',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                [
                    'year' => '2013',
                    'price' => '112000',
                    'car_id' => '3',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                [
                    'year' => '2014',
                    'price' => '113000',
                    'car_id' => '3',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                [
                    'year' => '2015',
                    'price' => '114000',
                    'car_id' => '3',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                [
                    'year' => '2011',
                    'price' => '90000',
                    'car_id' => '4',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                [
                    'year' => '2012',
                    'price' => '91000',
                    'car_id' => '4',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                [
                    'year' => '2013',
                    'price' => '92000',
                    'car_id' => '4',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                [
                    'year' => '2014',
                    'price' => '93000',
                    'car_id' => '4',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                [
                    'year' => '2015',
                    'price' => '94000',
                    'car_id' => '4',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                
            ]);
    }
}
