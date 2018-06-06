<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
  protected $table='cart';
  protected $primaryKey = 'cartID';
  protected $fillable=['jasaID','namaJasa','harga'];

     public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function jasa()
    {
        return $this->belongsTo('App\Jasa');
    }
}
