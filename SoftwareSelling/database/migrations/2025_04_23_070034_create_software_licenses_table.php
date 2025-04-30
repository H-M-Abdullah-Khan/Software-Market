<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftwareLicensesTable extends Migration
{
    public function up()
    {
        Schema::create('software_licenses', function (Blueprint $table) {
            $table->id('license_id');
            $table->foreignId('software_id')->constrained('software_products');
            $table->string('license_key')->unique();
            $table->date('expiration_date')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('software_licenses');
    }
}
