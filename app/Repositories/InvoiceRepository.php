<?php

namespace App\Repositories;

use App\Models\Invoice;

class InvoiceRepository extends BaseRepository
{
    /**
     * relations
     *
     * @var array
     */
    protected $relations = [];


    /**
     * __construct
     *
     * @return void
     */
    public function __construct(Invoice $invoice)
    {
        parent::__construct($invoice);
    }

}
