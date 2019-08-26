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
        
        //$this->call(EditorialTableSeeder::class);
        //$this->call(AutorTableSeeder::class);
        $this->call(LibroTableSeeder::class);
    }
}
