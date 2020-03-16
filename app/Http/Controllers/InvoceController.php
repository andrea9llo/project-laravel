<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Row;
use Illuminate\Http\Request;

class InvoceController extends Controller
{
  public function store(Request $request)
  {
    $data = $request->all();
    $invoice = Invoice::create($data);
    $data['invoice_id'] = $invoice->id;
    $invoice = Row::create($data);


    return view('welcome');

  }
}
