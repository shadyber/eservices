<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RolePermissionSeeder::class);
        $this->call(UserRoleSeeder::class);

        \App\Models\User::factory(3)->create();

        $this->call(BlogCategorySeeder::class);
         \App\Models\Blog::factory(50)->create();
      \App\Models\Banner::factory(3)->create();
        \App\Models\Newsletter::factory(10)->create();
    }
}
