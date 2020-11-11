<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateServerTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('server_types', function (Blueprint $table) {
            $table->id('server_type_id');
            $table->string('type');
        });

        DB::table('server_types')->insert([
            ['type' => 'Mainframe'],
            ['type' => 'Windows'],
            ['type' => 'Linux'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('server_types');
    }
}
