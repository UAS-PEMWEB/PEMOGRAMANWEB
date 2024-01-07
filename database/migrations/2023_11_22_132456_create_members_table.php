<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('members', function (Blueprint $table) {
        $table->id();
        $table->string('full_name');
        $table->string('email')->unique();
        $table->string('position');
        $table->string('photo');
        $table->string('periode');
        $table->string('nip');
        $table->unsignedBigInteger('user_id');
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        // Ubah 'users' sesuai dengan nama tabel user Anda jika berbeda
    });
}

public function down()
{
    Schema::dropIfExists('members');
}

};
