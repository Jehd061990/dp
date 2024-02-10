<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();
        DB::table('users')->insert(array(
            0 =>
            array(
                'user_id' => 1,
                'email' => 'jane_doe@dwells.com',
                'password' => '$2y$12$BfpVD7DGCBDMnwBEEgWmzObAWbpxdL4fIxfyfeVAOmDD/U9HCZ41K',
                'account_type' => 'super admin',
                'first_name' => 'jane',
                'last_name' => 'doe',
            ),
            1 =>
            array(
                'user_id' => 2,
                'email' => 'john_smith@dwells.com',
                'password' => '$2y$12$BaJbIHau9/3wL5IBcojPAeyXg9kpynePoePrJ1Z3gnoltuEjndjkS',
                'account_type' => 'admin',
                'first_name' => 'john',
                'last_name' => 'smith',
            ),
            2 =>
            array(
                'user_id' => 3,
                'email' => 'jayvee_siuagan@dwells.com',
                'password' => '$2y$12$LI1Zaea9q26tKso2uhnKvO0wkT6SBKilZWHIYyTUB8xEjIZh/3Mdy',
                'account_type' => 'user',
                'first_name' => 'jayvee',
                'last_name' => 'siuagan',
            ),
        ));
    }
}
