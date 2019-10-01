<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$uOHdnT1YWcZHDOtqdnPYfONu15qz/OY1dBxleMO.3AxWX3/fZVW4G',
                'remember_token' => null,
                'created_at'     => '2019-10-01 04:43:27',
                'updated_at'     => '2019-10-01 04:43:27',
            ],
        ];

        User::insert($users);
    }
}
