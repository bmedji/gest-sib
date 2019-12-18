<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricule')->unique();
            $table->string('name');
	    $table->string('surname');
            $table->integer('idfonc');
            $table->string('password');
            $table->string('idserv');
            $table->rememberToken();
            $table->timestamps();
        });

	DB::table('users')->insert(
            array(
                'matricule' => '1',
                'name' =>'Admin',
		'surname' => 'Admin',
		'idfonc' => 1,
		'password' => bcrypt('password'),
		'idserv' => 0,
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
        Schema::dropIfExists('users');
    }
}
