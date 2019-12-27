<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = ['id_agenda', 'data', 'data_ini', 'data_fim', 'nome_cliente', 'obs', 'id_users'];
    protected $table = 'jk_agenda';
    protected $primaryKey = 'id_agenda';
    public $incrementing = false;
    public $timestamps = false;

}
