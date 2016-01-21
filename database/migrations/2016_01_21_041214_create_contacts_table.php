<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('contactos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('usuario');
          $table->string('nombre');
          $table->string('apellido');
          $table->string('telefono',9);
          $table->string('email')->unique();
          $table->string('password', 60);
          $table->rememberToken();
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contactos');
    }
}
