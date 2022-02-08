<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
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
            \DB::table('roles')->truncate();
            \DB::table('roles')->insert([
                [
                    "name"          => "system_admin",
                    "description"          => "system admin",
                    "is_active"   => true,
                    "guard_name"       => "system_admin",
                    "created_at"    => now(),
                    "updated_at"    => now(),
                ],
                [
                    "name"          => "owner",
                    "description"          => "owner",
                    "is_active"   => true,
                    "guard_name"       => "owner",
                    "created_at"    => now(),
                    "updated_at"    => now(),
                ],
                [
                    "name"          => "staff",
                    "description"          => "staff",
                    "is_active"   => true,
                    "guard_name"       => "staff",
                    "created_at"    => now(),
                    "updated_at"    => now(),
                ],
            ]);
        });
        \Schema::enableForeignKeyConstraints();
    }
}
