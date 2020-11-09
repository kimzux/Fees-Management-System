<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model 
{

    protected $table = 'fees';
    public $timestamps = true;

    public function fee()
    {
        return $this->hasOne('Batches');
    }

}