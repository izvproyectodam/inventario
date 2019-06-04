<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bien extends Model
{
    // Nombre de la tabla de la base de datos que definimos (Database table name).
    protected $table='bien';

    /**
        Por defecto Eloquent  asume que existe una clave primaria llamada id,
        si este no es nuesto caso lo tenemos que indicar en la variable $primaryKey
    */
    //public $incrementing = false;
    //protected $keyType = 'string';
    protected $primaryKey = 'id';

    // Definimos los campos de la tabla directamente en la variable de tipo array $fillable
    /**
    bien: id
          idresponsable
          idtipo
          descripción
          numero
          ns
          ise
          idubicacion
          detalleubicacion
          idprocedencia
          observaciones
          fecha alta
          fecha edicion
          fecha baja
          motivo baja

    perfil: id
            nombre
    
    perfilusuario: id
                   idperfil
                   usuarioidea

    tipo: id
          nombre
    
    ordenador, monitor, proyector, pizarra digital, impresora, escáner, altavoces, etc.

    ubicación: id
               nombre
               planta
    
    a001, etc.

    procedencia: id
                 nombre

    junta (dotación), propia, otros, etc.
     */
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

    /**
    En la variable $hidden podemos indicar los campos que no queremos que nos devuelvan
    en las consultas, por ejemplo, los campos created_at y updated_at, que el ORM Eloquent
    añade por defecto
    */
    //public $timestamps = false;
    //const CREATED_AT = 'fecha_creacion';
    //const UPDATED_AT = 'fecha_edicion';
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