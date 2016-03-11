<?php

namespace nameproject;

use Illuminate\Database\Eloquent\Model;


class DetalleTelefono extends Model
{
    //
    protected $table = 'detalle_telefonos';

    public function telefono()
    {
      # code...
      return $this->hasMany('App\Telefonos');
    }

    public function contacto()
    {
      # code...
      return $this->belongsTo('App\Contacto');
    }

}
