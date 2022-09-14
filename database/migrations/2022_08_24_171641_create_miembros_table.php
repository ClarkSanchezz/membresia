<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miembros', function (Blueprint $table) {
            $table->id();
            $table->string('foto',60)->nullable();
            $table->string('nombre',60);
            $table->string('apellido1',60);
            $table->string('apellido2',60) ->nullable();
            $table->timestamp('fecha_nac');
            $table->tinyInteger('estado')->comment('0: Activo, 1:Inactivo, 2:Disciplina');
            $table->string('ministerio',60)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('miembros');
    }
};
