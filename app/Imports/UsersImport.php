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
       
        if($_POST){
    
          $user = User::where('email', request('email'))->first();
          if(!$user){
        $user = User::create([
            'name'   => $row [1],
            'email'  => $row[9],
            'password' => Hash::make($row[9])
            ]);
        
          }else{
            // return redirect()->back()->with('error','sorry user with that email address already exist!!');
            // return redirect(‘admission’)->with(‘message’, ‘User registered!);
            return redirect()->back()->with('error','sorry user with that email address already exist!!');
          }
        // $user = new User([
        //     'user_id',
        //     'name' ,
        //     'email',
        //     'password'
            

        // ]);
      
       

        return new Students([
            'registration_number'  => $row[0],
            'name'   => $row [1],
            'parent_name'  => $row [2],
            'gender' => $row [3],
            'date_of_birth'  => date("Y-m-d", strtotime($row[4])),
            'date_of_joining'  => date("Y-m-d", strtotime($row[5])),
            
            // 'date_of_birth'=> $row[4],
            // 'date_of_joining'=> $row[5],
            'education_level'  => $row[6],
            'branch'=> $row[7],
            'batch'=> $row[8],
            'email'=> $row[9],
            'phone_number'=> $row[10],
            'address'=> $row[11],
            // 'image'=>$zuu,
            'user_id' => $user->id

        ]);
            
       	
        // admission_number	student_name	parent_name	gender	date_of_birth date_of_join	date of join	education_level	branch	batch	email	phone_number	address	photo

    }
}
}