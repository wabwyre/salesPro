<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Schema::disableForeignKeyConstraints();
        \DB::transaction(function () {
            \DB::table('users')->truncate();
            \DB::table('users')->insert([
                [
                    "name"          => "system admin",
                    "email"          => "systemadmin@gmail.com",
                    "password"          =>  bcrypt('password'),
                    "phone"          => "254701194812",
                     "role_id" => "1",
                    "is_active"   => true,
                    "is_deleted" => false,
                    "created_at"    => now(),
                    "updated_at"    => now(),
                ],
            ]);
        });
        \Schema::enableForeignKeyConstraints();
    }
    
}