<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Ahmad',
            'email' => 'ahmad@gmail.com',
            'password' => Hash::make('123123123'),
        ]);

        $admin->assignRole('admin');


        $user = User::create([
            'name' => 'Suherman',
            'email' => 'suherman@gmail.com',
            'password' => Hash::make('12341234'),
        ]);

        $user->assignRole('user');
    }
}
