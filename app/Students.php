<?php

namespace App;
use User;
use Student_batch;
use Illuminate\Database\Eloquent\Model;

class Students extends Model 
{

    protected $table = 'students';
    
	protected $fillable = [
        'user_id',
		'registration_number',
		'name',
		'parent_name',
		'date_of_birth',
		'date_of_joining',
		'email',
		'batch_id',
        'phone_number',
        'address',
        'image',
        'gender'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'user_id', 'id');
	}

	public function batch()
	{
		return $this->hasMany('App\Student_batch');
	}

}