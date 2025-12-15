<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recado extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id',
        'autor',
        'mensagem',
        'data_publicacao'
    ];
}
