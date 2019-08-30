<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE TABLE location_data (
            id SERIAL NOT NULL PRIMARY KEY,
            location INTEGER REFERENCES locations(id) NOT NULL,
            name CHARACTER VARYING(255) NOT NULL,
            surname CHARACTER VARYING(255) NOT NULL,
            parent_name CHARACTER VARYING(255) NOT NULL,
            parent_surname CHARACTER VARYING(255) NOT NULL,
            birth_year INTEGER NOT NULL,
            weight INTEGER NOT NULL,
            height INTEGER NOT NULL,
            phone CHARACTER VARYING(40) NOT NULL,
            email CHARACTER VARYING(255) NOT NULL,
            paid BOOLEAN DEFAULT FALSE,
            newsletter BOOLEAN DEFAULT false
        );");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP TABLE IF EXISTS location_data");
    }
}
