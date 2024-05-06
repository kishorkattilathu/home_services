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
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('payment_id');
            $table->string('customer_id',100);
            $table->string('technician_id',100);
            $table->string('card_holder_name',100);
            $table->string('card_number',100);
            $table->string('expiry_year',100);
            $table->string('expiry_month',100);
            $table->string('cvv',100);
            $table->string('amount',100);
            $table->string('booking_id',100);

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
        Schema::dropIfExists('payments');
    }
};
