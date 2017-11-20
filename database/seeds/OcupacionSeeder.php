<?php

use Illuminate\Database\Seeder;

class OcupacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_ocupacion')->insert([
            ['id'=>   0,'nombre' => 'SIN INFORMACION'],

            
        ]);    
            
    }
}
