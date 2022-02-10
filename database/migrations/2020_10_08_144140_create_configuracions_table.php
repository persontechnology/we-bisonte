<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->decimal('iva')->default(12);
            $table->string('empresa')->nullable()->default('BISONTE');
            $table->string('descripcion')->default('DISTRIBUIDORA DE MANUALIDADES');
            $table->string('ruc')->default('0400320701001');
            $table->string('telefono')->default('022953329');
            $table->string('celular')->default('0984163866');
            $table->string('direccion')->default('Mnabí OE5-23 y García Moreno');
            $table->string('email')->default('');
            $table->string('foto')->default('');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configuracions');
    }
}
