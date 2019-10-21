<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table='student';
    protected $fillable =['fName','lName','address','password'];
}
