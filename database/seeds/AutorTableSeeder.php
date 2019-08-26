<?php

use Illuminate\Database\Seeder;
use App\Models\Autor;

class AutorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Autor::class, 2)->create();
    }
}
