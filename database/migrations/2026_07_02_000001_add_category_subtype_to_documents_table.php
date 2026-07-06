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
        Schema::table('documents', function (Blueprint $table) {
            // 'annual' or 'financial' — only used when type='report'
            $table->string('category')->nullable()->after('type');
            // e.g. 'Annual Report', 'Sustainability Report', 'Full Year Audited', etc.
            $table->string('sub_type')->nullable()->after('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->dropColumn(['category', 'sub_type']);
        });
    }
};
