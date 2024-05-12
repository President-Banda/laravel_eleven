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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('salary');
            $table->timestamps();
            $table->ForeignIdFor(App\Models\Employer::class);
            //$table->unsignedBigInteger('employer_id') old way
            // some sort of foreign key to make each job belong to an employer
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};
