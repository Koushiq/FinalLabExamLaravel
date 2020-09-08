<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllUsers extends Model
{
    //
    protected $table="alluser";
    protected $primaryKey="username";
    protected $keyType = 'string';
    public $timestamps = false;
}
