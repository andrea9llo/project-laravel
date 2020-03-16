<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
  protected $fillable = [
    'date_invoice',
    'num_invoice',
    'id_customer'
  ];

  public function row()
  {
      return $this->hasOne('App\Row');
  }
}
