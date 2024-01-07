<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('babukas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('product_name');
            $table->string('product_detail');
            $table->string('phone_number');
            $table->unsignedBigInteger('village_id');
            $table->string('image');
            $table->enum('status', ['pending', 'approve'])->default('pending');
            $table->timestamps();

            $table->foreign('village_id')->references('id')->on('list_villages')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('babukas');
    }
};