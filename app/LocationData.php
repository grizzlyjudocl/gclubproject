<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationData extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'location',
        'name',
        'surname',
        'parent_name',
        'parent_surname',
        'birth_year',
        'weight',
        'height',
        'phone',
        'email',
        'paid',
        'newsletter'
    ];

    public function loc() {
        return $this->belongsTo(Location::class, 'location', 'id');
    }
}