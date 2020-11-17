<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLoja extends Model
{
    use HasFactory;

    protected $table="user_loja";
    protected $fillable=['itemUser', 'itemLoja'];
}
