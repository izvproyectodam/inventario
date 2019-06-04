<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipo';

    protected $fillable =  array('nombre');
                                 
    public $timestamps = false;

    public function bienes()
    {
        return $this->hasMany('App\Bien');
    }
}
