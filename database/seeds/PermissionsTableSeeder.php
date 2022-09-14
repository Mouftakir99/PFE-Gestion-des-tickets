<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'title' => 'user_management_access',
            ],
            [
                'title' => 'permission_create',
            ],
            [
                'title' => 'permission_edit',
            ],
            [
                'title' => 'permission_show',
            ],
            [
                'title' => 'permission_delete',
            ],
            [
                'title' => 'permission_access',
            ],
            [
                'title' => 'role_create',
            ],
            [
                'title' => 'role_edit',
            ],
            [
                'title' => 'role_show',
            ],
            [
                'title' => 'role_delete',
            ],
            [
                'title' => 'role_access',
            ],
            [
                'title' => 'user_create',
            ],
            [
                'title' => 'user_edit',
            ],
            [
                'title' => 'user_show',
            ],
            [
                'title' => 'user_delete',
            ],
            [
                'title' => 'user_access',
            ],
            [
                'title' => 'status_create',
            ],
            [
                'title' => 'status_edit',
            ],
            [
                'title' => 'status_show',
            ],
            [
                'title' => 'status_delete',
            ],
            [
                'title' => 'status_access',
            ],
            [
                'title' => 'priority_create',
            ],
            [
                'title' => 'priority_edit',
            ],
            [
                'title' => 'priority_show',
            ],
            [
                'title' => 'priority_delete',
            ],
            [
                'title' => 'priority_access',
            ],
            [
                'title' => 'category_create',
            ],
            [
                'title' => 'category_edit',
            ],
            [
                'title' => 'category_show',
            ],
            [
                'title' => 'category_delete',
            ],
            [
                'title' => 'category_access',
            ],
            [
                'title' => 'ticket_create',
            ],
            [
                'title' => 'ticket_edit',
            ],
            [
                'title' => 'ticket_show',
            ],
            [
                'title' => 'ticket_delete',
            ],
            [
                'title' => 'ticket_access',
            ],
            [
                'title' => 'comment_create',
            ],
            [
                'title' => 'comment_edit',
            ],
            [
                'title' => 'comment_show',
            ],
            [
                'title' => 'comment_delete',
            ],
            [
                'title' => 'comment_access',
            ],
            [
                'title' => 'audit_log_show',
            ],
            [
                'title' => 'audit_log_access',
            ],
            [
                'title' => 'dashboard_access',
            ],
        ];


        foreach ($permissions as $key => $permission) {
            Permission::query()->updateOrCreate($permission);
        }

    }
}
