<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refund extends Model 
{

    protected $table = 'refund';
    public $timestamps = true;

    public function refund()
    {
        return $this->hasOne('Students');
    }

}