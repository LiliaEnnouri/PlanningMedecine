<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlageMatiereTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Plage_Matiere', function (Blueprint $table) {
            $table->increments('plage_matiere_id');

            $table->integer('matiere_id')->unsigned();
            $table->foreign('matiere_id')
                ->references('matiere_id')
                ->on('Matiere')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->integer('plage_section_id')->unsigned();
            $table->foreign('plage_section_id')
                ->references('plage_section_id')
                ->on('Plage_Section')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->integer('plage_horaire_id')->unsigned();
            $table->foreign('plage_horaire_id')
                ->references('plage_horaire_id')
                ->on('Plage_Horaire')
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
        Schema::dropIfExists('Plage_Matiere');
    }
}
