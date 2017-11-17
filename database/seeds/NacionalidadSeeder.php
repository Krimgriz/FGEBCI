<?php

use Illuminate\Database\Seeder;
use App\Models\Nacionalidad;

class NacionalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $arrayNacionalidades = array(
		array(
			'nombre' => ''
		),
		array(
			'nombre' => ''
			)
	);

    public function run()
    {
        foreach( $this->arrayNacionalidades as $nacionalidad ) {
			$n = new Nacionalidad;
			$n->nombre = $acionalidad['nombre'];
			$n->save();
		}
    }
}
