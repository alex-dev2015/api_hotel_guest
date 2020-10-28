<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chekin extends Model
{
    public $timestamps = true;
    protected $fillable = ['dateEntry', 'dateOutput', 'value', 'additionalVehicle', 'id_guest'];
}
