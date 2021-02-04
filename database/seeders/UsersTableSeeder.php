<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $users = [
        //     [
        //         'name'          => '権正時昌',
        //         'email'         => 'gonjouji@example.com',
        //         'password'      => Hash::make('password'),
        //     ],
        //     [
        //         'name'          => '源頼朝',
        //         'email'         => 'minamoto@example.com',
        //         'password'      => Hash::make('password'),
        //     ],
        // ];
        //     foreach($users as $user){
        //         \App\Models\User::create($user);
        //     }
        User::factory(10)->create(); 
    }
}
