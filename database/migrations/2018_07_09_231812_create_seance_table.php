<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Seance', function (Blueprint $table) {
            $table->increments('seance_id');
            $table->String('type');
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->date('date');

            $table->integer('enseignant_id')->unsigned();
            $table->foreign('enseignant_id')
                ->references('enseignant_id')
                ->on('Enseignant')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->integer('plage_matiere_id')->unsigned();
            $table->foreign('plage_matiere_id')
                ->references('plage_matiere_id')
                ->on('Plage_Matiere')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->integer('pathologie_id')->unsigned();
            $table->foreign('pathologie_id')
                ->references('pathologie_id')
                ->on('Pathologie')
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
        Schema::dropIfExists('Seance');
    }
}
