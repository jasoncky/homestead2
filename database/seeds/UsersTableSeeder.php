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
                'password'       => '$2y$10$riyrPJVTvUISOxNcK6qk6e22nNGL.oMrQ34gcKuDtNO.xFYSslcey',
                'remember_token' => null,
				'status'		 => 'Active',
				'username'		 => 'admin',
            ],
			[
                'id'             => 2,
                'name'           => 'jason',
                'email'          => 'jasoncky@gmail.com',
                'password'       => '$2y$10$riyrPJVTvUISOxNcK6qk6e22nNGL.oMrQ34gcKuDtNO.xFYSslcey',
                'remember_token' => null,
				'status'		 => 'Active',
				'username'		 => 'jasoncky',
            ],
			[
                'id'             => 3,
                'name'           => 'User1',
                'email'          => 'user@user.com',
                'password'       => '$2y$10$riyrPJVTvUISOxNcK6qk6e22nNGL.oMrQ34gcKuDtNO.xFYSslcey',
                'remember_token' => null,
				'status'		 => 'Active',
				'username'		 => 'user1',
            ],
        ];

        User::insert($users);
    }
}
