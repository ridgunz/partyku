<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jasa extends Model
{
  protected $table='jasa';
  protected $primaryKey = 'jasaID';
  protected $fillable=['namaJasa','harga','statusJasa','fotoJasa'];

    public function vendor()
    {
        return $this->belongsTo('vendor','vendorID');
    }

 
}