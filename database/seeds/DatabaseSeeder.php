<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ColorSeeder::class);
        $this->call(AseguradoraSeeder::class);
        $this->call(EscolaridadSeeder::class);
        $this->call(LenguaSeeder::class);
        $this->call(NacionalidadSeeder::class);
        $this->call(OcupacionSeeder::class);
        $this->call(TipoUsoSeeder::class);
        $this->call(TipoVehiculoSeeder::class);
        $this->call(UnidadSeeder::class);



    }
}
