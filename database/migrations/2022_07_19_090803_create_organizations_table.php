<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('name');
            $table->text('description')->nullable();
            $table->string('url')->nullable();

            $table->foreignUuid('industry_id')->references('id')->on('organization_industries');
            $table->enum('organization_size', [
                '0-1',
                '2-10',
                '11-50',
                '51-200',
                '201-500',
                '501-1000',
                '1001-5000',
                '5001-10001',
                '10001+',
            ]);

            $table->enum('organization_type', [
                'Educational',
                'Government Agency',
                'Non Profit',
                'Partnership',
                'Privately Held',
                'Public Company',
                'Self Employed',
                'Self Owned',
            ]);

            $table->year('year_founded')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizations');
    }
};
