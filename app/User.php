<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "user";
    protected $primaryKey = 'USER_ID';
    public $autoincrementing = true;
    protected $fillable = [
        'F_NAME',
        'L_NAME',
        'CITY',
        'BANK_ACCOUNT',
        'ID_ROLE'
    ];
}
