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
        Schema::create('storey', function (Blueprint $table) {
            $table->bigIncrements('storey_id');
            $table->string('storey_name'); //fucking1 2 3
            $table->string('storey_price', 50); //30k /40k /50k
            $table->string('flr_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_types');
    }
};
