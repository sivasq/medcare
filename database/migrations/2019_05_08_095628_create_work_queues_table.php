<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkQueuesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('work_queues', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('client_id');
			$table->foreign('client_id')->references('id')->on('clients');
			$table->unsignedBigInteger('reviewer_id')->nullable();
			$table->foreign('reviewer_id')->references('id')->on('users');
			$table->string('status');
			$table->string('summary_report')->nullable();
			$table->string('chat_status')->nullable();
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
		Schema::dropIfExists('work_queues');
	}
}
