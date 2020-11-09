<?php

namespace App;
use Student_batch;
use Illuminate\Database\Eloquent\Model;

class Batches extends Model 
{

    protected $table = 'batches';
    protected $fillable=[
        'id',
        'batch_id',
        'batch_name',
        
    ];

    public function student_batch()
    {
        return $this->belongsTo(Student_batch::class, 'id', 'batch_id');
    }

}