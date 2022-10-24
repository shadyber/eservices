<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('permissions')->insert([
            'name' => 'Create Role',
            'slug' => 'create-role',
        ]);

        \DB::table('permissions')->insert([
            'name' => 'Create Permissions',
            'slug' => 'create-permission',
        ]);

        \DB::table('permissions')->insert([
            'name' => 'Create User',
            'slug' => 'create-user',
        ]);


        \DB::table('permissions')->insert([
            'name' => 'Edit User',
            'slug' => 'edit-user',
        ]);


        \DB::table('permissions')->insert([
            'name' => 'Edit Sale',
            'slug' => 'edit-sale',
        ]);

        \DB::table('permissions')->insert([
            'name' => 'Edit Purchase',
            'slug' => 'edit-purchase',
        ]);

    }
}
