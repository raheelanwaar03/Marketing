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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('coupon_name');
            $table->string('coupon_slug');
            $table->longText('coupon_des');
            $table->string('coupon_type');
            $table->string('coupon_link');
            $table->string('coupon_code')->nullable();
            $table->string('coupon_category');
            $table->string('coupon_store');
            $table->string('coupon_img');
            $table->string('status')->default('0');
            $table->date('coupon_expire');
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
        Schema::dropIfExists('coupons');
    }
};
