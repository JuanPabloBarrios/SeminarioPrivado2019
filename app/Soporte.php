<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soporte extends Model
{
    protected $table = 'soportes';

    protected $fillable =[
        'name', 'status', 'description', 'note', 'responsable '
    ];

    public function user(){
        $this->belongTo('App\Users');

    }
}
