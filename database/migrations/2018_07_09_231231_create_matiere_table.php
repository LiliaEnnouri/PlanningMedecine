<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatiereTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Matiere', function (Blueprint $table) {
            $table->increments('matiere_id');
            $table->String('nom');
            $table->String('code');
            $table->String('semestre');


            $table->integer('niveau_id')->unsigned();
            $table->foreign('niveau_id')
                ->references('niveau_id')
                ->on('Niveau')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->integer('section_id')->unsigned();
            $table->foreign('section_id')
                ->references('section_id')
                ->on('Section')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->integer('service_id')->unsigned();
            $table->foreign('service_id')
                ->references('service_id')
                ->on('Service')
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
        Schema::dropIfExists('Matiere');
    }
}
