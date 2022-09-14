<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            CategoriesTableSeeder::class,
            StatusesTableSeeder::class,
            PrioritiesTableSeeder::class,
            PermissionsTableSeeder::class
        ]);
    }
}
