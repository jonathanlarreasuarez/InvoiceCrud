<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Contracts\IInvoiceController;
use App\Models\Invoice;
use App\Repositories\InvoiceRepository;
use App\Requests\InvoiceRequest;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller implements IInvoiceController
{
    private InvoiceRepository $invoiceRepository;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct(
       InvoiceRepository $invoiceRepository
    ){
        $this->invoiceRepository = $invoiceRepository;
    }

    public function index(Request $request)
    {
        $invoices = $this->invoiceRepository->all($request);
        return view('index',compact(['invoices']));
    }

    public function create()
    {
        return view('create');
    }

    public function store(InvoiceRequest $request)
    {
        $invoice = new Invoice($request->all());
        $invoice = $this->invoiceRepository->save($invoice);
        return redirect('/invoices')
            ->with('success', 'Game is successfully saved');
    }


    public function edit($id)
    {
        $invoice = $this->invoiceRepository->find($id);//Game::findOrFail($id);
        return view('edit', compact('invoice'));
    }

    public function update(InvoiceRequest $request, Invoice $invoice)
    {
        $invoice->fill($request->all());

        if ($invoice->isClean()) {
            return redirect('/invoices')
                ->with('error', 'You need to specify a different value to update');
        }
        $this->invoiceRepository->save($invoice);

        return redirect('/invoices')->with('success', 'Invoice Data is successfully updated');
    }

    public function destroy(Invoice $invoice)
    {
        $this->invoiceRepository->destroy($invoice);
        return redirect('/invoices')
            ->with('success', 'Invoices is successfully deleted');
    }

    public function pdf(Invoice $invoice)
    {
        $data = [
            'titulo' => 'Styde.net'
        ];

        return PDF::loadView('pdf', $data)->download('archivo.pdf');
    }

}
