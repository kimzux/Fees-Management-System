<?php

namespace App\Imports;
use App\Students;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
       

        return new Students([
            'registration_number'  => $row[0],
            'name'   => $row [1],
            'parent_name'  => $row [2],
            'gender' => $row [3],
            'date_of_birth'  => date("Y-m-d", strtotime($row[4])),
            'date_of_joining'  => date("Y-m-d", strtotime($row[5])),
            'education_level'  => $row[6],
            'branch'=> $row[7],
            'batch'=> $row[8],
            'email'=> $row[9],
            'phone_number'=> $row[10],
            'address'=> $row[11],
            'photo'=>$row[12]

        ]);
        return new User([
            'user_id'
        ]);
      
       

            
       	
        // admission_number	student_name	parent_name	gender	date_of_birth date_of_join	date of join	education_level	branch	batch	email	phone_number	address	photo

    }
}