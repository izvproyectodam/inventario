<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResponsableUsuario extends Model
{
    use SoftDeletes;
    
    protected $table = 'responsableusuario';

    protected $fillable =  array('idresponsable',
                                 'usuarioidea');
                                 
    public $timestamps = false;

    public function responsable()
    {
        return $this->belongsTo('App\Responsable', 'idperfil');
    }
}
