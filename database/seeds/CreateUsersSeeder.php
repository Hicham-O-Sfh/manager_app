<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'nom' => 'Admin',
                'prenom' => 'Admin',
                'is_admin' => true,
                'email' => 'admin@test.com',
                'password' => Hash::make("123456")
            ],
            [
                'nom' => 'User',
                'prenom' => 'User',
                'is_admin' => false,
                'email' => 'user@test.com',
                'password' => Hash::make("azerty")
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
