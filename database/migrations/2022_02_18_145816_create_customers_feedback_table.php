<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_feedback', function (Blueprint $table) {
            $table->id();
            $table->string('cust_id');
            $table->string('name');
            $table->string('email');
            $table->string('profile_pic');
            $table->string('phone');
            $table->string('feedback_title');
            $table->text('feedback_description');
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
        Schema::dropIfExists('customers_feedback');
    }
}
