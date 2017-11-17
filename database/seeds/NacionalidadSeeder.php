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
    private $arrayPeliculas = array(
		array(
			'nombre' => ''
		),
		array(
			'nombre' => 'El club de la lucha'
			)
	);

    public function run()
    {
        foreach( $this->arrayPeliculas as $pelicula ) {
			$p = new Movie;
			$p->title = $pelicula['title'];
			$p->year = $pelicula['year'];
			$p->director = $pelicula['director'];
			$p->poster = $pelicula['poster'];
			$p->rented = $pelicula['rented'];
			$p->synopsis = $pelicula['synopsis'];
			$p->save();
		}
    }
}
