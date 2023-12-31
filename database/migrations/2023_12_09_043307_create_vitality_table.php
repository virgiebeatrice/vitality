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
        Schema::create('vitalities', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('id_vitality')->nullable();
            $table->uuid('penyakit_id')->nullable();
            $table->uuid('obatvitamin_id')->nullable();
            $table->timestamps();

            $table->foreign('obatvitamin_id')
                ->references('id')
                ->on('obatvitamin')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('penyakit_id')
                ->references('id')
                ->on('penyakits')
                ->onUpdate('cascade')
                ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vitality');
    }
};
