<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceRequest  extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     */
    public function rules(): array
    {
        return [
            'id_transaction' => 'nullable|integer',
            'inv_razonSocial' => 'required|string|max:255',
            'inv_nombreComercial' => 'nullable|string|max:255',
            'inv_dirEstablecimiento' => 'nullable|string|max:255',
            'inv_ruc' => 'required|string|max:255',
            'inv_fechaEmision' => 'required|date',
            'inv_obligadoContabilidad' => 'nullable|string',
            'inv_numeroAutorizacionDocumento' => 'required|string|max:255',
            'inv_establecimiento' => 'required|string|max:255',
            'inv_ptoEmision' => 'required|string|max:255',
            'inv_secuencial' => 'required|string|max:255',
            'inv_identificacionComprador' => 'nullable|string|max:255',
            'inv_razonSocialComprador' => 'nullable|string|max:255',
            'inv_direccionComprador' => 'nullable|string|max:255',
            'inv_telefonoComprador' => 'nullable|string|max:255',
            'inv_emailComprador' => 'nullable|string|max:255',
            'inv_totalSinImpuestos' => 'required|numeric',
            'inv_totalDescuento' => 'required|numeric',
            'inv_totalImpuestoIva' => 'required|numeric',
            'inv_importeTotal' => 'required|numeric',
            'inv_moneda' => 'nullable|string|max:255',
        ];
    }
}
