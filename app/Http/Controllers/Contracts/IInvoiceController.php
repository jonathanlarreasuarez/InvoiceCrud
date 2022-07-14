<?php

namespace App\Http\Controllers\Contracts;

use App\Models\Invoice;
use App\Requests\InvoiceRequest;
use Illuminate\Http\Request;

interface IInvoiceController
{
    public function index(Request $request);

    public function create();

    public function store(InvoiceRequest $request);

    public function edit($id);

    public function update(InvoiceRequest $request, Invoice $invoice);

    public function destroy(Invoice $invoice);
}
