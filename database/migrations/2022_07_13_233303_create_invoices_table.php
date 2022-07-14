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
    public function up(): void
    {
        Schema::create('invoices', static function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_transaction')->nullable();

            $table->string('inv_razonSocial');
            $table->string('inv_nombreComercial')->nullable();
            $table->string('inv_dirEstablecimiento');
            $table->string('inv_ruc');
            $table->date('inv_fechaEmision');
            $table->enum('inv_obligadoContabilidad', ['SI', 'NO'])->nullable();

            $table->string('inv_numeroAutorizacionDocumento');
            $table->string('inv_establecimiento');
            $table->string('inv_ptoEmision');
            $table->string('inv_secuencial');

            $table->string('inv_identificacionComprador')->nullable();
            $table->string('inv_razonSocialComprador')->nullable();
            $table->string('inv_direccionComprador')->nullable();
            $table->string('inv_telefonoComprador')->nullable();
            $table->string('inv_emailComprador')->nullable();

            $table->decimal('inv_totalSinImpuestos', 11, 4)->default(0);
            $table->decimal('inv_totalDescuento', 11, 4)->default(0);
            $table->decimal('inv_totalImpuestoIva', 11, 4)->default(0);
            $table->decimal('inv_importeTotal', 11, 4)->default(0);
            $table->string('inv_moneda')->nullable();

            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
