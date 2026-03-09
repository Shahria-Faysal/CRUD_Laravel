<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Users;
use Illuminate\Support\Facades\File;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/users.json');
        $users = collect(json_decode($json));

        $users->each(function($user){     
          users::create([
            'name' => $user->name,
            'email'=> $user->email,
            'age' => $user->age,
            'city' => $user->city,
          ]);
        });


    }
}
