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
        
            $location = new Location();
            $location->name = "Przedszkole Sieraków";
            $location->save();
        
    }
}
