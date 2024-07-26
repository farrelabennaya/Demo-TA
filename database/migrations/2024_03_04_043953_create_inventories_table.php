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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('device_type_id');
            $table->string('device_name');
            $table->unsignedBigInteger('brand_id');
            $table->string('serial_number');
            $table->string('mac_address');
            $table->string('device_photo');
            $table->string('stock');
            $table->unsignedBigInteger('unit_id');
            $table->string('device_status');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('no action');

            $table->foreign('device_type_id')
                ->references('id')
                ->on('device_types')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('brand_id')
                ->references('id')
                ->on('brands')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('unit_id')
                ->references('id')
                ->on('units')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
