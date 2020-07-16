<?php

use App\User;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            1,2,3
        ];
		
		foreach($users as $user)
        {
			if ($user!=3)
			{
				User::findOrFail($user)->roles()->sync(1);	
			}
			else
			{
				User::findOrFail($user)->roles()->sync(2);
			}
			
		}
    }
}
