<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inspection');
            $table->foreign('inspection')->references('id')->on('inspections');
            $table->unsignedBigInteger('inspection_definition_item');
            $table->foreign('inspection_definition_item')->references('id')->on('inspection_definition_items');
            $table->decimal('value');
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
        Schema::dropIfExists('inspection_items');
    }
}
