<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $dates = ['bday_tfd'];
  
    public  function user(){
      return $this->belongsTo(User::class);
  }
}
