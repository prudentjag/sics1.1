<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentificationCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identification_cards', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
                $table->string('card_number')->unique();
                $table->string('barcode')->unique(); // Barcode value
                $table->date('issue_date');
                $table->date('expiry_date')->nullable();
                $table->foreignId('company_id')->constrained()->onDelete('cascade');
                $table->enum('status', ['active', 'inactive', 'lost'])->default('active');
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
        Schema::dropIfExists('identification_cards');
    }
}
