<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Row extends Model
{
  protected $fillable = [
    'invoice_id',
    'description',
    'quantity',
    'amount',
    'amountIva',
    'TotAmountIva'
  ];

  public function invoice()
  {
      return $this->belongsTo('App\Invoice');
  }
}
