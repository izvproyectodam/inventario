<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Procedencia extends Model
{
    use SoftDeletes;

    protected $table = 'procedencia';

    protected $fillable =  array('nombre');
                                 
    public $timestamps = false;

    public function bienes()
    {
        return $this->hasMany('App\Bien');
    }
}
