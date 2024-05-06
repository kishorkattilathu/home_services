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
        Schema::create('technicians', function (Blueprint $table) {
            $table->bigIncrements('tech_id');
            $table->string('tech_name',100);
            $table->string('tech_email',100);
            $table->string('tech_phone',100);
            $table->string('tech_cat_id',100);
            $table->string('type',100);
            $table->string('location',100);
            $table->string('profile',100);
            $table->string('licence',100);
            $table->string('password',100);
            $table->string('tech_status',100);
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
        Schema::dropIfExists('technicians');
    }
};
