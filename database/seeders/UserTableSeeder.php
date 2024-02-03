<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

    //     DB::table('admins')->insert([

    //         //Admin
    //     [
            
    //         'name'=>'slim',
    //         'email'=>'slim.zraier@gmail.com',
    //         'tel'=>'51493554',
    //         'address'=>'sidi thabet',
    //         'status'=>'active',
            
        
            
    //     ],  

    // ]);

    DB::table('users')->insert([

        //Admin
    [
        
        'username'=>'admin',
        'password'=> Hash::make('111'),
        'role'=> 'admin',
        'status'=>'active',
        
    ],

  

]);
        
    }
}
