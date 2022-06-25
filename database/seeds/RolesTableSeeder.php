<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Admin Role Create
         */
        DB::table('roles')->insert([
            'name' => 'Admin',
            'slug' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /**
         * Manager Role Create
         */
        DB::table('roles')->insert([
            'name' => 'Manager',
            'slug' => 'manager',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /**
         * Restaurant Owner Role Create
         */
        DB::table('roles')->insert([
            'name' => 'Restaurant Owner',
            'slug' => 'restaurant_owner',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        /**
         * Customer Role Create
         */
        DB::table('roles')->insert([
            'name' => 'Customer',
            'slug' => 'customer',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
