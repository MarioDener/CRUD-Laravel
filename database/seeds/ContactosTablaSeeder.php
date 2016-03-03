<?php

use Illuminate\Database\Seeder;
use nameproject\User;
use nameproject\Contacto;
use nameproject\Telefonos;
use nameproject\DetalleTelefono;

class ContactosTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
      User::truncate();
      // Contacto::truncate();
      // Telefonos::truncate();
      // DetalleTelefono::truncate();
      factory(nameproject\Contacto::class,30)->create();
      factory(nameproject\Telefonos::class,30)->create();
      factory(nameproject\User::class,10)->create();
      factory(nameproject\DetalleTelefono::class,30)->create();
    }
}
