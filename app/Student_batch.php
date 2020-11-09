<?php

namespace App;
use Students;
use Batches;
use Illuminate\Database\Eloquent\Model;

class student_batch extends Model
{
	protected $table = 'student_batch';
    protected $fillable = [
        'id',
		'student_id',
		'batch_id',
		'is_active',
		
	];

	public function student()
	{
		return $this->belongsTo('App\Students');
	}

	public function batch()
	{
		return $this->belongsTo('App\Batches');
	}

}

