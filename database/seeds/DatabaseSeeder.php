<?php

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
        // Only user Feed php artisan migrate:fresh --seed
       // $this->call(UserSeeder::class);

        //For Demo Contents
        $this->call([UserSeeder::class]);
    }
}
