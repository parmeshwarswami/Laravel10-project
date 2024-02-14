<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;
    protected $fillable = ['airport', 'airport_code', 'city', 'city_code', 'country', 'country_code', 'region', 'region_code', 'continent', 'continent_code', 'longitude_x', 'latitude_y', 'priority', 'popularity', 'classification'];

}
