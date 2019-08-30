<?php

use App\Location;
use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++) {
            $location = new Location();
            $location->name = "Placówka ".($i+1);
            $location->save();
        }
    }
}
