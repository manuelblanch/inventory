<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_objects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_public');
            $table->integer('id_extern');
            $table->string('tipus');
            $table->string('name');
            $table->string('description');
            $table->integer('parent_object_id');
            $table->integer('material_type_id');
            $table->integer('brand_id');
            $table->integer('model_id');
            $table->integer('location_id');
            $table->string('quantity');
            $table->string('price');
            $table->integer('money_source_id');
            $table->integer('provider_id');
            $table->string('preservation_state');
            $table->integer('study_id');
            $table->integer('mainOrganizationalUnitId');
            $table->userstamps();
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
        Schema::dropIfExists('inventory_objects');
    }
}
