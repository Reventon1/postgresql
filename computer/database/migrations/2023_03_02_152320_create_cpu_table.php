<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cpu', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("socket");
            $table->float("frequency");
            $table->integer("cores");
            $table->integer("price");
            $table->timestamps();
        });
    }
//     CREATE TABLE cpu
// (
// 	id SERIAL PRIMARY KEY,
// 	name varchar(100),
// 	socket VARCHAR(100),
// 	frequency DECIMAL,
// 	cores INTEGER,
// 	price INTEGER,
// 	perf_points INTEGER

// );

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cpu');
    }
};
