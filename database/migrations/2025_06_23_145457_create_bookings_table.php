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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('lawyer_id');
            $table->date('date');
            $table->time('time');
            $table->string('case_type');
            $table->text('notes')->nullable();         // ✅ الحقل اللي كان ناقص
            $table->text('admin_note')->nullable();    // ✅ عشان ميحصلش خطأ تاني في myBookings
            $table->string('status')->default('Pending');
            $table->timestamps();

            // علاقات المفاتيح الخارجية
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('lawyer_id')->references('id')->on('lawyers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
