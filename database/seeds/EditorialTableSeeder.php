m<?php

use Illuminate\Database\Seeder;
use App\Models\Editorial;

class EditorialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$editoriales=[

    		'Algarabia',
    		'Huellas&Huellas',
    		'EdicionesB'
          ];

          foreach ($editoriales as $editorial){
          	Editorial::create(['nombre' => $editorial]);

        }
    }
}
