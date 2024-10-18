<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardActivityLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_activity_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('identification_card_id')->constrained()->onDelete('cascade');
            $table->string('activity_type'); // e.g., issued, deactivated, lost
            $table->timestamp('activity_time');
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('card_activity_logs');
    }
}
