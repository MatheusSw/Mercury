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
            $table->string('source_server')->constrained('servers','identifier');
            $table->foreignId('source_app')->constrained('applications','icto');
            $table->string('target_server')->nullable()->constrained('servers','identifier');
            $table->foreignId('target_app')->nullable()->constrained('applications','icto');
            $table->string('file_path')->nullable();
            $table->foreignId('stage')->constrained('stages','stage_id');
            $table->text('description')->nullable();
            $table->string('tags');
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
        Schema::dropIfExists('flows');
    }
}
