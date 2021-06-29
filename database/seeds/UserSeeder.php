<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $password  = '1234Demo';

        User::create([
            'name'     => 'Ihor Napriienko',
            'email'    => 'i.v.naprienko@gmail.com',
            'password' => Hash::make($password),
            'email_verified_at' => now(),
        ]);

        User::create([
            'name'     => 'Test User',
            'email'    => 'i.v.naprienko@yandex.ru',
            'password' =>  Hash::make($password),
            'email_verified_at' => now(),
        ]);

        factory(User::class, 10)->create();
    }
}
