<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    protected $fillable = ['nome', 'login', 'senha'];
    protected $table = 'jk_usuario';
    protected $primaryKey = 'id_usuario';
    public $incrementing = false;
    public $timestamps = false;

}
