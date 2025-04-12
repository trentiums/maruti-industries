<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'category_create',
            ],
            [
                'id'    => 20,
                'title' => 'category_edit',
            ],
            [
                'id'    => 21,
                'title' => 'category_show',
            ],
            [
                'id'    => 22,
                'title' => 'category_delete',
            ],
            [
                'id'    => 23,
                'title' => 'category_access',
            ],
            [
                'id'    => 24,
                'title' => 'product_create',
            ],
            [
                'id'    => 25,
                'title' => 'product_edit',
            ],
            [
                'id'    => 26,
                'title' => 'product_show',
            ],
            [
                'id'    => 27,
                'title' => 'product_delete',
            ],
            [
                'id'    => 28,
                'title' => 'product_access',
            ],
            [
                'id'    => 29,
                'title' => 'blog_category_create',
            ],
            [
                'id'    => 30,
                'title' => 'blog_category_edit',
            ],
            [
                'id'    => 31,
                'title' => 'blog_category_show',
            ],
            [
                'id'    => 32,
                'title' => 'blog_category_delete',
            ],
            [
                'id'    => 33,
                'title' => 'blog_category_access',
            ],
            [
                'id'    => 34,
                'title' => 'blog_access',
            ],
            [
                'id'    => 35,
                'title' => 'blog_post_create',
            ],
            [
                'id'    => 36,
                'title' => 'blog_post_edit',
            ],
            [
                'id'    => 37,
                'title' => 'blog_post_show',
            ],
            [
                'id'    => 38,
                'title' => 'blog_post_delete',
            ],
            [
                'id'    => 39,
                'title' => 'blog_post_access',
            ],
            [
                'id'    => 40,
                'title' => 'inquiry_create',
            ],
            [
                'id'    => 41,
                'title' => 'inquiry_edit',
            ],
            [
                'id'    => 42,
                'title' => 'inquiry_show',
            ],
            [
                'id'    => 43,
                'title' => 'inquiry_delete',
            ],
            [
                'id'    => 44,
                'title' => 'inquiry_access',
            ],
            [
                'id'    => 45,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
