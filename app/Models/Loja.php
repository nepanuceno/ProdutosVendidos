<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    use HasFactory;

    protected $fillable = ["nome",
    "cnpj",
    "endereco",
    "cidade",
    "estado",
    "pais",
    "telefone",
    "email"];

    public function usuarios()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function produtos()
    {
        return $this->hasMany('App\Models\Produto');
    }
}
