<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFonctionnalitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fonctionnalites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codefonc');
            $table->string('libfonc');
            $table->timestamps();
        });

	DB::table('fonctionnalites')->insert(
            array(
                'codefonc' => '1',
                'libfonc' =>'Admin',
            )
        );

	DB::table('fonctionnalites')->insert(
            array(
                'codefonc' => '2',
                'libfonc' =>'Gestionnaire',
            )
        );

	DB::table('fonctionnalites')->insert(
            array(
                'codefonc' => '3',
                'libfonc' =>'Superviseur',
            )
        );

	DB::table('fonctionnalites')->insert(
            array(
                'codefonc' => '4',
                'libfonc' =>'Smc',
            )
        );

	DB::table('fonctionnalites')->insert(
            array(
                'codefonc' => '5',
                'libfonc' =>'Unite Traitante',
            )
        );

	DB::table('fonctionnalites')->insert(
            array(
                'codefonc' => '6',
                'libfonc' =>'Direction financière',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fonctionnalites');
    }
}
