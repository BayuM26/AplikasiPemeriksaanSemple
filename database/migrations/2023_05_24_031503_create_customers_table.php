<?php

use App\Models\User;
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
        Schema::create('customers', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignIdFor(User::class);
            $table->string('namaCustomer');
            $table->text('alamatCustomer');
            $table->date('tanggalRegistrasi');
            $table->String('airMinum')->nullable();
            $table->String('airBersih')->nullable();
            $table->String('airLimbahRs')->nullable();
            $table->String('airSungai')->nullable();
            $table->String('airKolamRenang')->nullable();
            $table->String('EColi')->nullable();
            $table->String('Salmonella')->nullable();
            $table->String('jamur')->nullable();
            $table->String('KimiaFood')->nullable();
            $table->String('TotalBiaya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
