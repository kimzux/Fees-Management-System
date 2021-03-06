<?php

namespace App;
use User;
use Branches;
use Student_batch;
use Illuminate\Database\Eloquent\Model;

class Students extends Model 
{

    protected $table = 'students';
    
	protected $fillable = [
        'user_id',
		'registration_number',
		'name',
		'branch_id',
		'parent_name',
		'date_of_birth',
		'date_of_join',
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
	public function branch()
	{
		return $this->hasMany('App\Branches');
	}

}