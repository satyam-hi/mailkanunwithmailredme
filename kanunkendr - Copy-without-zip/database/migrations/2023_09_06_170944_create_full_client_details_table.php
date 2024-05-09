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
        Schema::create('full_client_details', function (Blueprint $table) {
            $table->id();
            $table->string('clintid');
            $table->string('caseno');
            $table->string('casetitle');
            $table->string('clintname');
            $table->string('clintfathername');
            $table->string('mobile');
            $table->string('clintaddress')->nullable();
            $table->string('emailaddress')->nullable();
            $table->string('password');
            $table->string('clintimage')->nullable();
            $table->string('clintadvocatename');
            $table->string('staffadvocatename');
            $table->string('opposedname');
            $table->string('opposedadvocatename')->nullable();
            $table->string('casetype');
            $table->string('courtname');
            $table->string('judgename');
            $table->json('documentimage')->nullable();
            $table->json('documentpdf')->nullable();
            $table->json('hearingdate');
            $table->string('casestatus');
            $table->string('paymentprice')->nullable();
            $table->string('paymentstatus')->nullable();
            $table->string('moredata')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('full_client_details');
    }
};
