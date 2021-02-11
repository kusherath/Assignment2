<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appModel extends Model
{
    protected $fillable = [
        'surname','firstname','nic','mobile','email','qualification','experience',
    ];

    protected $hidden = [
        'rememberToken',
   ];
}
