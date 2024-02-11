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
    {// Create this migration via artisan command
// php artisan make:migration create_carts_table

Schema::create('carts', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('user_id');
    $table->unsignedBigInteger('product_id');
    $table->foreign('product_id')->references('id')->on('products');
    $table->integer('quantity')->default(1);
    $table->timestamps();

    $table->foreign('user_id')->references('id')->on('users'); // Assuming you have a users table
});

        // Schema::create('carts', function (Blueprint $table) {
        //     $table->bigIncrements('cart_id');
        //     $table->unsignedBigInteger('product_id')->index('carts_product_id_foreign');
        //     $table->string('price');
        //     $table->unsignedBigInteger('user_id')->index('carts_user_id_foreign');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
};
