<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    use SoftDeletes;
    
    protected $table = 'responsable';

    protected $fillable =  array('nombre');
                                 
    public $timestamps = false;
    
    public function bienes()
    {
        return $this->hasMany('App\Bien');
    }

    public function usuarios()
    {
        return $this->hasMany('App\ResponsableUsuario');
    }
}