<?php

use Illuminate\Database\Seeder;
use nameproject\Contacto;

class ContactosTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Contacto::truncate();
      factory(nameproject\Contacto::class,30)->create();
    }
}
