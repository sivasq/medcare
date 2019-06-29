<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEScriptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_scripts', function (Blueprint $table) {
            $table->bigIncrements('id');
	        $table->string('name');
	        $table->text('address');
	        $table->date('date');
	        $table->date('void');
	        $table->string('medication_name');
	        $table->integer('units');
	        $table->integer('refills');
	        $table->string('substitution');
	        $table->string('signature');
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
        Schema::dropIfExists('e_scripts');
    }
}
