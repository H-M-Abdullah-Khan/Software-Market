<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftwareDownloadsTable extends Migration
{
    public function up()
    {
        Schema::create('software_downloads', function (Blueprint $table) {
            $table->id('download_id');
            $table->foreignId('order_id')->constrained('orders');
            $table->foreignId('software_id')->constrained('software_products');
            $table->timestamp('downloaded_at')->useCurrent();
            $table->string('download_link');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('software_downloads');
    }
}
