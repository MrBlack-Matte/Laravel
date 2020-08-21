<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    protected $table = 'tbltest';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name','age','email', 'message',
    ];
}
