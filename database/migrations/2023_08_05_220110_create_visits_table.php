<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->decimal('receipt', 5, 2);
            $table->unsignedBigInteger('member_id');
            $table->unsignedBigInteger('cashier_id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
