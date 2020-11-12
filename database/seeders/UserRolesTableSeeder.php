<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_role')->delete();
        DB::table('user_role')->insert([
            ['user_id'=>1,'role_id'=>1],
            ['user_id'=>2,'role_id'=>2],
            ['user_id'=>3,'role_id'=>3],
            ['user_id'=>4,'role_id'=>3],
            ['user_id'=>5,'role_id'=>1],
            ['user_id'=>6,'role_id'=>2],
            ['user_id'=>7,'role_id'=>1],
            ['user_id'=>8,'role_id'=>3],
            ['user_id'=>9,'role_id'=>1],
            ['user_id'=>10,'role_id'=>2],
        ]);
    }
}
