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
            $table->unsignedBigInteger('category_id')->nullable()->after('slug');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        });

        // Migrate existing data
        $courses = DB::table('courses')->get();
        foreach ($courses as $course) {
            $category = DB::table('categories')->where('slug', $course->category)->first();
            if ($category) {
                DB::table('courses')->where('id', $course->id)->update(['category_id' => $category->id]);
            }
        }

        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->enum('category', ['music', 'academic', 'other'])->after('category_id');
        });

        // Migrate back
        $courses = DB::table('courses')->get();
        foreach ($courses as $course) {
            $category = DB::table('categories')->where('id', $course->category_id)->first();
            if ($category) {
                DB::table('courses')->where('id', $course->id)->update(['category' => $category->slug]);
            }
        }

        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
};
