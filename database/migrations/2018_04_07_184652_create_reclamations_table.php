<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReclamationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamations', function (Blueprint $table) {
            $table->string('referencerec')->primary();
            $table->string('motifrec');
            $table->string('resumerec');
            $table->string('daterecprec');
            $table->string('datetraiterec');
            $table->string('etatrec');
            $table->string('statutrec');
            $table->string('aregulariser');
            $table->string('PieceComptable');
            $table->string('codecli');
            $table->string('observation');
	    $table->integer('idserv');
	    $table->string('valider');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reclamations');
    }
}
