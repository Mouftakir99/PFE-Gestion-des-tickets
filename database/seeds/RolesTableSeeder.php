<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'title' => 'Admin',
            ],
            [
                'title' => 'Agent',
            ],
        ];

        foreach ($roles as $key => $role) {
            Role::query()->updateOrCreate($role);
        }

    }
}
