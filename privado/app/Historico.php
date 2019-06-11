<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Historico extends Model
{
    use SoftDeletes;

    protected $table='historico';

    protected $fillable =  array('idbien',
                                 'idresponsableprevio',
                                 'idresponsable',
                                 'idubicacionprevia',
                                 'idubicacion',
                                 'detalleubicacionprevia',
                                 'detalleubicacion');

    protected $hidden = ['created_at','updated_at'];

    public function bien()
    {
        return $this->belongsTo('App\Bien', 'idbien');
    }

    public function responsable()
    {
        return $this->belongsTo('App\Responsable', 'idresponsable');
    }

    public function responsableprevio()
    {
        return $this->belongsTo('App\Responsable', 'idresponsableprevio');
    }

    public function ubicacion()
    {
        return $this->belongsTo('App\Ubicacion', 'idubicacion');
    }

    public function ubicacionprevia()
    {
        return $this->belongsTo('App\Ubicacion', 'idubicacionprevia');
    }
}