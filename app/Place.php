<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = "places";

    protected $fillable = [
        'placeName',
        'street',
        'number',
        'additional',
        'neighborhood',
        'latitude',
        'longitude',
        'addtionalInfos',
        'typeOfDonations'
    ];

}
