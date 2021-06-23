<?php


namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name'=>'Nathan',
                'email'=>'nathan@example.com',
                'password'=>'Password1',
            ],
            [
                'name'=>'Axel',
                'email'=>'axel@example.com',
                'password'=>'Password1',
            ],
            [
                'name'=>'Tomas',
                'email'=>'tomas@example.com',
                'password'=>'Password1',
            ],
        ];

        foreach ($users as $user){
            User::create($user);
        }
    }
}
