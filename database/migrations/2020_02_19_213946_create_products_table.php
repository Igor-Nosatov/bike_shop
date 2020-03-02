<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('image')->nullable();
            $table->double('price')->default(0);
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->integer('description_id');
            $table->integer('size_id');
            $table->integer('discipline_id');
            $table->integer('model_year_id');
            $table->integer('brake_type_id');
            $table->integer('frame_material_id');
            $table->integer('gear_type_id');
            $table->integer('drivetrain_brand_id');
            $table->integer('drivetrain_groupset_id');
            $table->integer('model_family_id');
            $table->integer('description_id');
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
        Schema::dropIfExists('products');
    }
}
