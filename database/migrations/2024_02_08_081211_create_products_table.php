<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // Create this migration via artisan command
// php artisan make:migration create_products_table

Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('storey_id'); // Assuming this is a foreign key
    $table->string('design');
    $table->text('description');
    $table->decimal('lot_area', 8, 2);
    $table->string('image_3d');
    $table->string('title');
    $table->decimal('price', 8, 2);
    $table->timestamps();
});

        // Schema::create('products', function (Blueprint $table) {
        //     $table->bigIncrements('product_id');
        //     $table->unsignedBigInteger('storey_id')->index('products_storey_id_foreign');
        //     $table->string('design');
        //     $table->string('description', 1500);
        //     $table->string('lot_area');
        //     $table->string('image_3d')->nullable();
        //     $table->string('floor_plan_image')->nullable();
        //     $table->string('interior_image')->nullable();
        //     $table->string('title', 300);
        // });
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
