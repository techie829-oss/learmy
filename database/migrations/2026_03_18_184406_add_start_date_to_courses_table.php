<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->date('start_date')->nullable()->after('price');
            $table->string('duration')->nullable()->after('start_date'); // e.g. "3 Months", "6 Weeks"
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn(['start_date', 'duration']);
        });
    }
};
