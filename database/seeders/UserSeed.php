<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Rai Omido',
                'email' => 'raiomido@eggzample.co.io',
                'password' => 'secret',
            ],
            [
                'name' => 'John Doe',
                'email' => 'john@eggzample.co.io',
                'password' => 'secret',
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane@eggzample.co.io',
                'password' => 'secret',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
