<?php

use Illuminate\Database\Seeder;
USE Illuminate\Support\Facades\DB;
USE Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols=[
            'administrador',
            'editor',
            'supervisor'
        ];
        //para insertar los roles en la base de datos pasamos//
        foreach($rols as $key => $value){
            DB::table('rol')->insert([
                'nombre'=>$value,
                'created_at'=>Carbon::now()->format('y-m-d H:i:s')
                ]);
        }
        
    }
}
