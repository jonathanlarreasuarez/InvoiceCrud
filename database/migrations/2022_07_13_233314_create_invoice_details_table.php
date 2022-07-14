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
        Schema::create('invoice_details', static function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('invoice_id')->nullable();
            $table->foreign('invoice_id')->references('id')->on('invoices');

            $table->string('inv_det_codigo');

            $table->string('inv_det_descripcion');

            $table->decimal('inv_det_cantidad', 11, 4)->default(0);
            $table->decimal('inv_det_precioUnitario', 11, 4)->default(0);
            $table->decimal('inv_det_descuento', 11, 4)->default(0);
            $table->decimal('inv_det_precioTotalSinImpuesto', 11, 4)->default(0);

            /* Solamente para guardar el identificador de la cuota */
            $table->string('inv_det_detallesAdicionalesNombre')->nullable();
            $table->string('inv_det_detallesAdicionalesValor')->nullable();

            $table->timestamps();
            $table->softDeletes('deleted_at' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_details');
    }
};
