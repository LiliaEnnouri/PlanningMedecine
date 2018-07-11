<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlageSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Plage_Section', function (Blueprint $table) {
            $table->increments('plage_section_id');
            $table->integer('semaine_debut');
            $table->integer('semaine_fin');

            $table->integer('section_id')->unsigned();
            $table->foreign('section_id')
                ->references('section_id')
                ->on('Section')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->integer('niveau_id')->unsigned();
            $table->foreign('niveau_id')
                ->references('niveau_id')
                ->on('Niveau')
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
        Schema::dropIfExists('plage_section');
    }
}
