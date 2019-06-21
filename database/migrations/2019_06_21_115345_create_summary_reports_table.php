<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSummaryReportsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('summary_reports', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('work_queue_id');
			$table->foreign('work_queue_id')->references('id')->on('work_queues');
			$table->longText('provider_report')->nullable();
			$table->longText('patient_report')->nullable();
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
		Schema::dropIfExists('summary_reports');
	}
}
