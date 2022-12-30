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
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('service_id');
            $table->unsignedBigInteger('id_category');
            $table->string('product');
            $table->integer('laundry_price');
            $table->integer('dryclean_price');
            $table->integer('wash_price');
            $table->integer('dry_price');
            $table->integer('iron_price');
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::table('services', function (Blueprint $table) {
            $table->foreign('id_category')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service');
    }
};
