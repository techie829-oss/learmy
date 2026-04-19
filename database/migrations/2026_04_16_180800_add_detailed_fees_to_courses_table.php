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
        Schema::table('courses', function (Blueprint $table) {
            $table->decimal('indian_online_fee', 10, 2)->nullable()->after('price');
            $table->decimal('indian_offline_fee', 10, 2)->nullable()->after('indian_online_fee');
            $table->decimal('intl_online_fee', 10, 2)->nullable()->after('indian_offline_fee');
            $table->decimal('intl_offline_fee', 10, 2)->nullable()->after('intl_online_fee');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn(['indian_online_fee', 'indian_offline_fee', 'intl_online_fee', 'intl_offline_fee']);
        });
    }
};
