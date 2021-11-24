<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre',20);
            $table->integer('Parcial_1')->length(4);
            $table->integer('Parcial_2')->length(4);
            $table->integer('Final')->length(4);
            $table->date('Fecha');
            $table->unsignedBigInteger('id_students')->nullable();
            $table->foreign('id_students')->references('id')->on('Students')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('notes');
    }
}
