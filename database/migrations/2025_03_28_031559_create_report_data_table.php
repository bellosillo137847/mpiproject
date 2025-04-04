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
        Schema::create('report_data', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('tpm_data_serial')->unique();
            $table->string('model')->nullable();
            $table->string('material_code')->nullable();
            $table->string('partial_number')->nullable();
            $table->string('total_quantity')->nullable();
            $table->string('pulse_tracer_machine_number')->nullable();
            $table->date('date')->nullable();
            $table->string('shift')->nullable();
            $table->string('operator')->nullable();
            $table->json('magnetic_property_data')->nullable();
            $table->float('length')->nullable();
            $table->float('width')->nullable();
            $table->float('thickness')->nullable();
            $table->string('material_grade')->nullable();
            $table->string('mpi_sample_quantity')->nullable();
            $table->float('std_dev')->nullable();
            $table->float('cpu')->nullable();
            $table->float('cpl')->nullable();
            $table->float('cpk')->nullable();
            $table->string('br_cpk_remarks')->nullable();
            $table->string('remarks')->nullable();
            $table->string('smp_judgement')->nullable();
            $table->string('prepared_by')->nullable();
            $table->string('checked_by')->nullable();
            $table->string('approved_by')->nullable();
            $table->foreign('tpm_data_serial')->references('serial_no')->on('tpm_data')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_data');
    }
};
