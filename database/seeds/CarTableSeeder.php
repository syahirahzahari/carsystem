<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car')->truncate();
        DB::table('car')->insert(
        [
                [
                    'car_name' => 'HONDA CIVIC',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                [
                    'car_name' => 'TOYOTA ALTIS',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                [
                    'car_name' => 'MAZDA 3',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                [
                    'car_name' => 'SUZUKI SX4',
                    'created_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                    'updated_at'=> Carbon::now()->format ('Y-m-d H:i:s'),
                ],
                
            ]);
    }
}
