<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandsizeclassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landsizeclasses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedInteger('weight');
            $table->boolean('publish');
            $table->integer('landcategory_id')->unsigned();
            $table->foreign('landcategory_id')
                ->references('id')->on('landcategories')
                ->onDelete('cascade');

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
        Schema::table('landsizeclasses', function (Blueprint $table) {
            $table->dropForeign(['landcategory_id']);
            Schema::dropIfExists('landsizeclasses');

        });
    }
}
