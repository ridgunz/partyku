<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
  protected $table='customer';
  protected $primaryKey = 'customerID';
  protected $fillable=['namaCustomer','phone','alamat','gender','birthDate','description'];

  public function user()
  {
  	return $this->hasOne('user','id');
  }
    
}