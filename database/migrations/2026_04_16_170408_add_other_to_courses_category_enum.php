<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            DB::statement("ALTER TABLE courses MODIFY COLUMN category ENUM('music', 'academic', 'other') NOT NULL");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            DB::statement("ALTER TABLE courses MODIFY COLUMN category ENUM('music', 'academic') NOT NULL");
        });
    }
};
