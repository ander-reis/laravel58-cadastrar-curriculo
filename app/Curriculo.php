<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{

    protected $table = 'curriculo';

    protected $fillable = ['nome', 'cpf'];
}
