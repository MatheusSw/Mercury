<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flows', function (Blueprint $table) {
            $table->id('flow_id');
            $table->string('identifier')->unique()->nullable();
            $table->string('source_server');
            $table->integer('source_app');
            $table->string('target_server')->nullable();
            $table->integer('target_app')->nullable();
            $table->string('file_path')->nullable();
            $table->integer('stage');
            $table->text('description')->nullable();
            $table->string('tags');
            $table->timestamps();

            $table->foreign('source_server')->references('identifier')->on('servers');
            $table->foreign('source_app')->references('icto')->on('applications');
            $table->foreign('target_server')->references('identifier')->on('servers');
            $table->foreign('target_app')->references('icto')->on('applications');
            $table->foreign('stage')->references('stage_id')->on('stages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flows');
    }
}
