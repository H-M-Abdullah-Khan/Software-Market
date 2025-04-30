<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftwareAnalyticsTable extends Migration
{
    public function up()
    {
        Schema::create('software_analytics', function (Blueprint $table) {
            $table->id('analytics_id');
            $table->foreignId('software_id')->constrained('software_products');
            $table->integer('downloads')->default(0);
            $table->integer('views')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('software_analytics');
    }
}
