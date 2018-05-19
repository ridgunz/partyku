<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
  protected $table='vendor';
  protected $primaryKey = 'vendorID';
  protected $fillable=['namaVendor','phone','description','alamat'];
    
}