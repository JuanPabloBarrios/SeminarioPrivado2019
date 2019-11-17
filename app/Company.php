<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Company extends Model
{
    protected $table = 'companies';

    protected $fillable =[
        'name', 'Dirección', 'correo', 'Teléfono'
    ];

    public function user(){
        $this->belongTo('App\Users');

    }
}
