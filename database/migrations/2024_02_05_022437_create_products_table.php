<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('product_id', true);
            // $table->string('storey'); 1
            $table->bigInteger('storey_id')->unsigned();
            $table->string('design');
            $table->string('description', 1500);
            $table->string('lot_area');
            $table->string('3d_image')->nullable();
            $table->string('floor_plan_image')->nullable();
            $table->string('interior_image')->nullable();
            $table->string('title', 300);
            $table->foreign('storey_id')->references('storey_id')->on('storey')->onCascade('delete');
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
};
