<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fullname' => 'Manisha Mahato',
            'email' => 'manisha.mahato023@apexcollege.edu.np',
            'role' => 'admin',
            'address' => 'kathmandu',
            'dob' => '2003-09-26',
            'gender' => 'female',
            'contact' => '9808540462',
            'password' => Hash::make('password'),
        ]);
        // User::create([
        //     'fullname' => 'Reeja Maharjan',
        //     'email' => 'reeja.maharjan023@apexcollege.edu.np',
        //     'role' => 'admin',
        //     'address' => 'ktm',
        //     'dob' => '',
        //     'gender' => 'female',
        //     'contact' => '9808540462',
        // ]);
        // User::create([
        //     'fullname' => 'Shristi Aryal',
        //     'email' => 'shristi.aryal023@apexcollege.edu.np',
        //     'role' => 'admin',
        //     'address' => 'ktm',
        //     'dob' => '',
        //     'gender' => 'female',
        //     'contact' => '9808540462',
        // ]);
    }
}
