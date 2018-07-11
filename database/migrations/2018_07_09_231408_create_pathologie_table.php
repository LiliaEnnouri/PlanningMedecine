<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePathologieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pathologie', function (Blueprint $table) {
            $table->increments('pathologie_id');
            $table->String('libelle');

            $table->integer('matiere_id')->unsigned();
            $table->foreign('matiere_id')
                ->references('matiere_id')
                ->on('Matiere')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pathologie');
    }
}
