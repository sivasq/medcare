<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEScriptAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_script_attachments', function (Blueprint $table) {
            $table->bigIncrements('id');
	        $table->unsignedBigInteger('e_script_id');
	        $table->foreign('e_script_id')->references('id')->on('e_scripts');
	        $table->string('attachment');
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
        Schema::dropIfExists('e_script_attachments');
    }
}
