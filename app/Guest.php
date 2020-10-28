<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{

    public $timestamps = true;
    protected $fillable = ['name', 'doc', 'phone'];
    public function chekin(){

        return $this->hasOne(Chekin::class, 'id_guest');
    }

    public function chekins(){
        return $this->hasMany(Chekin::class, 'id_guest');
    }
}
