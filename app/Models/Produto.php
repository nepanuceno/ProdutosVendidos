<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['descricao', 'valor', 'loja_id'];

    public function categorias()
    {
        return $this->belongsToMany('App\Models\Categoria');
    }

    public function loja()
    {
        return $this->hasOne('App\Models\Loja');
    }
}
