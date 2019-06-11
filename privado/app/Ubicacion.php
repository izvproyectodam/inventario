<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use SoftDeletes;
    
    protected $table = 'ubicacion';

    protected $fillable =  array('nombre',
                                 'planta');
                                 
    public $timestamps = false;

    public function bienes()
    {
        return $this->hasMany('App\Bien');
    }

    public function historicos()
    {
        return $this->hasMany('App\Historico');
    }
}
