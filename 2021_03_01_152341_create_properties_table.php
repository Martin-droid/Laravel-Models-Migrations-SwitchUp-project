<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->string('Name');
            $table->Foreign_Key('Property_type');
            $table->text('Description');
            $table->string('Country');
            $table->string('County');
            $table->string('City');
            $table->string('Location');
            $table->string('Code');
            $table->string('Status');
            $table->Foreign_key('Listed_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
