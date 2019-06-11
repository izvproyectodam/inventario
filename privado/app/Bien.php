<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bien extends Model
{
    use SoftDeletes;

    protected $table='bien';

    protected $primaryKey = 'id';

    protected $fillable =  array('idresponsable',
                                 'idtipo',
                                 'descripcion',
                                 'numero',
                                 'marca',
                                 'modelo',
                                 'ns',
                                 'ise',
                                 'idubicacion',
                                 'detalleubicacion',
                                 'idprocedencia',
                                 'observaciones',
                                 'motivo');

    protected $hidden = ['created_at','updated_at'];
    
    protected $attributes = [
        'numero' => 1,
    ];

    public function responsable()
    {
        return $this->belongsTo('App\Responsable', 'idresponsable');
    }

    public function tipo()
    {
        return $this->belongsTo('App\Tipo', 'idtipo');
    }

    public function ubicacion()
    {
        return $this->belongsTo('App\Ubicacion', 'idubicacion');
    }

    public function procedencia()
    {
        return $this->belongsTo('App\Procedencia', 'idprocedencia');
    }

    public function historicos()
    {
        return $this->hasMany('App\Historico');
    }
}