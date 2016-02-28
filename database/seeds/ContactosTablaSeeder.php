<?php

use Illuminate\Database\Seeder;
use nameproject\Contacto;
use nameproject\User;

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
      User::truncate();
      factory(nameproject\Contacto::class,30)->create();
      factory(nameproject\User::class,10)->create();
    }
}
