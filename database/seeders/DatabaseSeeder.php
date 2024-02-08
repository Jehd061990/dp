<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(UserSeeder::class);
        $this->command->info('User table seeded!');
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(CartsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrderProductsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(StoreyTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VariantsTableSeeder::class);
    }
}
