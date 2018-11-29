<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeoNames extends Model
{
    protected $fillable = [
        'uuid', 'name', 'lang', 'lat', 'lng'
    ];

    protected $table = 'geonames';


    public static function saveGeoNamesData($result) : bool
    {
        $geoNames = Self::whereUuid($result[0])->first();
        if(is_null($geoNames)) {
            $geoNames = new self();
            $geoNames->uuid = $result[0];
        }
        $geoNames->name = $result[1];
        $geoNames->lang = $result[8];
        $geoNames->lat = $result[4];
        $geoNames->lng = $result[5];
        $geoNames->save();
        return true;
    }
}
