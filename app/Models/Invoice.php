<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model
{
    use HasFactory;


    /**
     * table
     *
     * @var string
     */
    protected $table = 'invoices';

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'id_transaction',
        'inv_razonSocial',
        'inv_nombreComercial',
        'inv_dirEstablecimiento',
        'inv_ruc',
        'inv_fechaEmision',
        'inv_obligadoContabilidad',
        'inv_numeroAutorizacionDocumento',
        'inv_establecimiento',
        'inv_ptoEmision',
        'inv_secuencial',
        'inv_identificacionComprador',
        'inv_razonSocialComprador',
        'inv_direccionComprador',
        'inv_telefonoComprador',
        'inv_emailComprador',
        'inv_totalSinImpuestos',
        'inv_totalDescuento',
        'inv_totalImpuestoIva',
        'inv_importeTotal',
        'inv_moneda'
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
     * InvoiceDetails
     *
     * @return HasMany
     */
    public function invoiceDetails() : HasMany
    {
        return $this->hasMany(InvoiceDetails::class, 'invoice_id');
    }

}
