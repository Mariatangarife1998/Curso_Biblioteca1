<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTablas([
            'rol',
            'permiso'
        ]);
              $this->call(TablaRolSeeder::class); //se llama a la clase que hemos creado la cual es tablarolseeder
              $this->call(TablaPermisoSeeder::class);
    }
     
    protected function truncateTablas(array $tablas)
    { 
      DB::statement('ALTER TABLE rol DISABLE TRIGGER ALL'); //se setea los foreign_key en 0 para no presentar problemas 
       foreach ($tablas as $tabla){
           DB::table($tabla)->truncate();
       }
       DB::statement('ALTER TABLE rol ENABLE TRIGGER ALL');
    }
 }

