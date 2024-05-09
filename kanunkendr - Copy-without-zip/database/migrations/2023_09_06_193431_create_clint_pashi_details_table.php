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
        Schema::create('clint_pashi_details', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('clintid');
            $table->string('clintname');
            $table->string('caseno');
            $table->string('paymentprice');
            $table->string('paymentstatus');
            $table->string('casetitle');
            $table->string('casetype');
            $table->string('courtname');
            $table->string('writenote');
            $table->string('procedure');
            $table->string('previsdate');
            $table->string('nextdate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clint_pashi_details');
    }
};
