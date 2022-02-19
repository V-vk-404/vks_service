<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaytmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paytms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->string('user_name');
            $table->string('user_email');
            $table->string('user_phone');
            $table->string('user_address');
            $table->string('price');
            $table->string('order_id');
            $table->string('transaction_id');
            $table->string('status');
            $table->bigInteger('service_category_id')->unsigned()->nullable();
            $table->string('slug_image')->nullable();
            $table->bigInteger('slug_id')->unsigned()->nullable();
            $table->string('service_category')->nullable();
            $table->string('slug_name')->nullable();
            $table->bigInteger('sprovider_id')->unsigned()->nullable();
            $table->string('sprovider_name')->nullable();
            $table->string('sprovider_phone')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('service_category_id')->references('id')->on('service_categories')->onDelete('cascade');
            $table->foreign('slug_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paytms');
    }
}
