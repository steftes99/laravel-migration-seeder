<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trip = new Trip();

        $trip->id = 1;
        $trip->trip_name = 'sin city';
        $trip->trip_destination = 'Amsterdam';
        $trip->hotel_name = 'AmsHotel';
        $trip->hotel_rating = '4';
        $trip->trip_duration_days = '4';
        $trip->trip_price = '299,99';

        $trip->save();
    }
}
