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
        Schema::create('config', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cpu_id');
            $table->foreign('cpu_id')->references('id')->on('cpu')->onDelete('cascade');
            $table->unsignedBigInteger('gpu_id');
            $table->foreign('gpu_id')->references('id')->on('gpu')->onDelete('cascade');
            $table->unsignedBigInteger('motherboard_id');
            $table->foreign('motherboard_id')->references('id')->on('motherbard')->onDelete('cascade');
            $table->unsignedBigInteger('ram_id');
            $table->foreign('ram_id')->references('id')->on('ram')->onDelete('cascade');
            $table->unsignedBigInteger('powersup_id');
            $table->foreign('powersup_id')->references('id')->on('powersup')->onDelete('cascade');
            $table->unsignedBigInteger('storage_id');
            $table->foreign('storage_id')->references('id')->on('storage')->onDelete('cascade');
            $table->unsignedBigInteger('coolling_id');
            $table->foreign('coolling_id')->references('id')->on('coolling')->onDelete('cascade');
            $table->unsignedBigInteger('case_id');
            $table->foreign('case_id')->references('id')->on('case')->onDelete('cascade');
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
        Schema::dropIfExists('config');
    }
};
