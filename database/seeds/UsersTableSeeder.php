<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Admin Create
         */
        DB::table('users')->insert([
            'role_id'               =>       '1',
            'name'                  =>       'Admin',
            'username'              =>       'admin',
            'email'                 =>       'admin@mail.com',
            'email_verified_at'     =>       now(),
            'password'              =>       bcrypt('12345678'),
            'created_at'            =>       now(),
            'updated_at'            =>       now(),
        ]);

        /**
         * Manager Create
         */
        DB::table('users')->insert([
            'role_id'               =>       '2',
            'name'                  =>       'Manager',
            'username'              =>       'manager',
            'email'                 =>       'manager@mail.com',
            'email_verified_at'     =>       now(),
            'password'              =>       bcrypt('12345678'),
            'created_at'            =>       now(),
            'updated_at'            =>       now(),
        ]);

        /**
         * Restaurant Owner Create
         */
        DB::table('users')->insert([
            'role_id'               =>       '3',
            'name'                  =>       'Restaurant Owner',
            'username'              =>       'owner',
            'email'                 =>       'owner@mail.com',
            'email_verified_at'     =>       now(),
            'password'              =>       bcrypt('12345678'),
            'created_at'            =>       now(),
            'updated_at'            =>       now(),
        ]);

        /**
         * Customer Create
         */
        DB::table('users')->insert([
            'role_id'               =>       '4',
            'name'                  =>       'Customer',
            'username'              =>       'customer',
            'email'                 =>       'customer@mail.com',
            'email_verified_at'     =>       now(),
            'password'              =>       bcrypt('12345678'),
            'created_at'            =>       now(),
            'updated_at'            =>       now(),
        ]);
    }
}
