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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->integer('enhancer');
            $table->string('card_number');
            $table->string('nik', 16);
            $table->string('name');
            $table->text('address');
            $table->enum('status', ['Aktif', 'Non Aktif']);
            $table->enum('type', ['PBI APBD', 'PBI APBN']);
            $table->text('information');
            $table->enum('download', ['1', '2', '3'])->default('2')->comment('1 : Operator boleh download, 2 : Operator tidak bisa download, 3 : Diminta');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
