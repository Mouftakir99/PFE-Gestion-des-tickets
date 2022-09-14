<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {

        User::query()->updateOrCreate(['email'=> 'agent3@agent3.com'],[
            'name' => 'Agent 3',
            'password' => bcrypt("password")
        ]);

                    User::query()->updateOrCreate(['email'=> 'agent2@agent2.com'],[
            'name' => 'Agent 2',
            'password' => bcrypt("password")
        ]);

                    User::query()->updateOrCreate(['email'=> 'agent1@agent1.com'],[
            'name' => 'Agent 1',
            'password' => bcrypt("password"),
        ]);

                    User::query()->updateOrCreate(['email'=> 'admin@admin.com'],[
            'name' => 'Admin',
            'password' => bcrypt("password"),
        ]);

    }
}
