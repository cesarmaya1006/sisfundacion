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
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id', 'fk_usuario_notificaciones')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->dateTime('fec_creacion');
            $table->string('titulo', 255);
            $table->longText('mensaje');
            $table->string('link', 255)->nullable();
            $table->string('id_link', 255)->nullable();
            $table->string('tipo', 50)->nullable();
            $table->string('accion', 50)->nullable();
            $table->boolean('estado')->default(1);
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
        Schema::dropIfExists('notificaciones');
    }
};
