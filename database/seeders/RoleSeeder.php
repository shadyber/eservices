<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('roles')->insert([
            'name' => 'Super Admin',
            'slug' => 'admin',
        ]);


        \DB::table('roles')->insert([
            'name' => 'User',
            'slug' => 'user',
        ]);

        \DB::table('roles')->insert([
            'name' => 'Editor',
            'slug' => 'editor',
        ]);

        \DB::table('roles')->insert([
            'name' => 'Author',
            'slug' => 'author',
        ]);

    }
}
