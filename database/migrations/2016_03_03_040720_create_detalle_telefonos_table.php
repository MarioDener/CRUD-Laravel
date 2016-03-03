<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleTelefonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('detalle_telefonos', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idContacto')->unsigned();
          $table->integer('idTelefono')->unsigned();
          $table->rememberToken();
          $table->timestamps();

          $table->foreign('idContacto')
                ->references('id')->on('contactos');
          $table->foreign('idTelefono')
                ->references('id')->on('telefonos');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('detalle_telefonos');
    }
}
