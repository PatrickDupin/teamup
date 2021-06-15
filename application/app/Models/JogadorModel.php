<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JogadorModel extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome'];

}
