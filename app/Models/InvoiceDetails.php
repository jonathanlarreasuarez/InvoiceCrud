<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InvoiceDetails extends Model
{
    use HasFactory;

    /**
     * table
     *
     * @var string
     */
    protected $table = 'invoice_details';

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'invoice_id',
        'inv_det_codigo',
        'inv_det_descripcion',
        'inv_det_cantidad',
        'inv_det_precioUnitario',
        'inv_det_descuento',
        'inv_det_precioTotalSinImpuesto',
        'inv_det_detallesAdicionalesNombre',
        'inv_det_detallesAdicionalesValor'
    ];

    /**
     * hidden
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * invoice
     *
     * @return BelongsTo
     */
    public function invoice() : BelongsTo
    {
        return $this->belongsTo(Invoice::class, 'invoice_id');
    }
}
