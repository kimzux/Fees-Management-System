<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branches extends Model 
{

    protected $table = 'branches';
    protected $fillable=[
        'id',
        'branch_name',
        
    ];
    public function student(){
        return $this->belongsTo('Students');
    }


}