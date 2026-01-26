<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'userss';

    protected $fillable = ['name', 'email', 'age', 'city'];
    
    public $timestamps = false;
}
