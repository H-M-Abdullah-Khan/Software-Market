<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftwareProductsTable extends Migration
{
    public function up()
    {
        Schema::create('software_products', function (Blueprint $table) {
            $table->id();

            // Foreign key for the user who submitted it
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Software Details
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('category')->nullable();
            $table->enum('pricing_type', ['free', 'paid'])->default('free');
            $table->decimal('price', 10, 2)->nullable(); // if paid

            // Uploads
            $table->string('main_file'); // path to ZIP or EXE
            $table->json('screenshots')->nullable(); // array of URLs
            $table->string('demo_url')->nullable();

            // Status & Verification
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->text('admin_feedback')->nullable();

            // Security
            $table->boolean('is_active')->default(true); // soft disable product
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('software_products');
    }
}
