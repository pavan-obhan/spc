<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionDefinitionItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_definition_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inspection_definition_id')->constrained();
            $table->unsignedBigInteger('inspection_definition_group_id');
            $table->foreign('inspection_definition_group_id','insp_def_grp_id')->references('id')->on('inspection_definition_groups');
            $table->string('reference_number');
            $table->foreignId('measuring_tool_id')->constrained();
            $table->string('serial_number');
            $table->string('specification');
            $table->boolean('spc_enabled');
            $table->decimal('upper_specification_limit')->nullable();
            $table->decimal('lower_specification_limit')->nullable();
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
        Schema::dropIfExists('inspection_definition_items');
    }
}
