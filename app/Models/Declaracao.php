<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Declaracao extends Model
{
    protected $table = 'declaracoes';
    protected $fillable = ['hash', 'data'];
}
