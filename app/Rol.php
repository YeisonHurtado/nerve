<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "role";
    protected $primaryKey = 'ROLE_ID';
    public $autoincrementing = true;
    protected $fillable = [
        'ROLE_NAME'
    ];
}
