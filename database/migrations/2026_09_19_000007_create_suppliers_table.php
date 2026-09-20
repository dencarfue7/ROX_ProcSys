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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();

            $table->string('supplier_code', 50)->unique();

            $table->string('business_name');

            $table->string('trade_name')->nullable();

            $table->string('supplier_type')->nullable();

            $table->string('business_structure')->nullable();

            $table->string('tin', 30)->nullable();

            $table->string('philgeps_number', 100)->nullable();

            $table->date('philgeps_expiry_date')->nullable();

            $table->string('contact_person')->nullable();

            $table->string('position')->nullable();

            $table->string('email')->nullable();

            $table->string('phone')->nullable();

            $table->string('mobile')->nullable();

            $table->text('address')->nullable();

            $table->string('barangay')->nullable();

            $table->string('city')->nullable();

            $table->string('province')->nullable();

            $table->string('region')->nullable();

            $table->string('postal_code')->nullable();

            $table->string('website')->nullable();

            $table->string('status')->default('pending');

            $table->boolean('is_blacklisted')->default(false);

            $table->date('blacklist_date')->nullable();

            $table->text('blacklist_reason')->nullable();

            $table->text('remarks')->nullable();

            $table->foreignId('created_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->foreignId('updated_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->timestamps();

            $table->index(['business_name', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
