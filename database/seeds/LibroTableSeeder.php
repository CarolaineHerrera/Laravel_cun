<?php

use Illuminate\Database\Seeder;

class LibroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Editorial::class, 5)
        	->create()
        	->each(function($editorial){
        		$editorial->libros()->save(factory(App\Models\Libro::class)->make());
        	});
    }
}
