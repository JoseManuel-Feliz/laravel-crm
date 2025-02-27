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
        Schema::table(
            'companies', function (Blueprint $table) {
                $table->unsignedBigInteger('industry_id')->after('id');
                $table->foreign('industry_id')->references('id')->on('industries');
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table(
            'companies', function (Blueprint $table) {
                $table->dropForeign('companies_industry_id_foreign');
                $table->dropColumn('industry_id');
            }
        );
    }
};
