<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access_points', function (Blueprint $table) {
             $table->id();
                $table->string('location');
                $table->string('access_type'); // e.g., door, room
                $table->foreignId('company_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('access_points');
    }
}
