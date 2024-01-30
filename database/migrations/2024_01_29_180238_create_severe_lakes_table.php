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
        Schema::create('severe_lakes', function (Blueprint $table) {
            $table->string('Filename');
            $table->string('Label_2015');
            $table->decimal('XMin_2015', 10, 8);
            $table->decimal('YMin_2015', 10, 8);
            $table->decimal('XMax_2015', 10, 8);
            $table->decimal('YMax_2015', 10, 8);
            $table->decimal('Area_2015', 15, 8);
            $table->string('Label_2016');
            $table->decimal('XMin_2016', 10, 8);
            $table->decimal('YMin_2016', 10, 8);
            $table->decimal('XMax_2016', 10, 8);
            $table->decimal('YMax_2016', 10, 8);
            $table->decimal('Area_2016', 15, 8);
            $table->decimal('Percentage_Decrease', 10, 8);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('severe_lakes');
    }
};
