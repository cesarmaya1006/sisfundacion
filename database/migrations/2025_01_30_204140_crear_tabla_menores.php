<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menores', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->unsignedBigInteger('tipo_documento_id');
            $table->foreign('tipo_documento_id', 'fk_menores_tipo_documentos')->references('id')->on('tipo_documentos')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id', 'fk_municipio_menores')->references('id')->on('municipios')->onDelete('restrict')->onUpdate('restrict');
            $table->string('identificacion')->unique();
            $table->string('nombre1');
            $table->string('nombre2')->nullable();
            $table->string('apellido1');
            $table->string('apellido2')->nullable();
            $table->date('fecha_nacimiento');
            $table->string('genero');
            $table->string('foto')->default('sin_foto.png');
            $table->string('grupo_sanguineo', 255);
            $table->string('nacionalidad', 255)->default('Colombiano');
            $table->string('grupo_etnico', 255);
            $table->boolean('discapacidad')->default(0);
            $table->string('tipo_discapacidad', 255)->nullable();
            $table->string('padre')->default('Desconocido');
            $table->string('madre')->default('Desconocido');
            $table->boolean('telefono')->default(0);
            $table->string('num_telefono')->nullable();
            $table->integer('estado')->default(1);
            $table->timestamps();
            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menores');
    }
};
