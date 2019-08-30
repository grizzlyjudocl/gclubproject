<?php

use App\Location;
use Illuminate\Database\Seeder;

class LocationsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\LocationData::class, 80)->create();
    }
}
