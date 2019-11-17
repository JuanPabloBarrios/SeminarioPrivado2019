<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cobro extends Model
{
    // inStanciAs la tabla de la base de datos
    protected $table = 'cobros';

    protected $fillable =[
        'nombre', 'monto', 'fecha'
    ];

    public function user(){
        $this->belongTo('App\Users');

    }
}
