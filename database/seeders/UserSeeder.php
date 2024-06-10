<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $userData = [
        [
            'name'=>'Keisya',
            'email'=>'keisyaa012@gmail.com',
            'role'=>'superadmin',
            'password'=>bcrypt('12345678')
        ],
        [
            'name'=>'Serafim Sitorus',
            'email'=>'serafim@gmail.com',
            'role'=>'operator',
            'password'=>bcrypt('12345678')
        ],
        [
            'name'=>'Wahyu Sianipar',
            'email'=>'wahyu@gmail.com',
            'role'=>'tutor',
            'password'=>bcrypt('12345678')
        ],
        [
            'name'=>'Ceycillia Dear',
            'email'=>'cici@gmail.com',
            'role'=>'parent',
            'password'=>bcrypt('12345678')
        ],
        [
            'name'=>'Naufal Fauzan',
            'email'=>'naufal@gmail.com',
            'role'=>'job_seeker',
            'password'=>bcrypt('12345678')
        ],
        [
            'name'=>'Ghalbi',
            'email'=>'ghalbi@gmail.com',
            'role'=>'operator',
            'password'=>bcrypt('12345678')
        ],
        [
            'name'=>'Denice',
            'email'=>'denice@gmail.com',
            'role'=>'operator',
            'password'=>bcrypt('12345678')
        ],

    ];

    foreach($userData as $key => $val){
        User::create($val);
    }
    }
}
