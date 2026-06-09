<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('rektors', function (Blueprint $table) {
            $table->string('periode')->nullable()->after('jabatan');
        });
    }

    public function down(): void
    {
        Schema::table('rektors', function (Blueprint $table) {
            $table->dropColumn('periode');
        });
    }
};