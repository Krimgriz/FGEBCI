<?php

use Illuminate\Database\Seeder;
use App\Models\CatNacionalidad;

class NacionalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $arrayNacionalidades = array(
		array(
			'nombre' => 'Mexicana'
		),
		array(
			'nombre' => 'Española'
			)
	);

    public function run()
    {
    	DB::table('cat_nacionalidad')->insert([
            'nombre' => '3513514354'],[
            'nombre' => 'asfhasf']);
			/*
        foreach( $this->arrayNacionalidades as $nacionalidad ) {
			
			$n = new Nacionalidad;
			$n->nombre = $nacionalidad['nombre'];
			$n->save();

			DB::create(array(
            	'nombre'  =>  $nacionalidad['nombre']
            ));
			*/
		}
    }
}


