<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concession extends Model 
{

    protected $table = 'concession';
    public $timestamps = true;

    public function concession()
    {
        return $this->hasMany('Students');
    }

}