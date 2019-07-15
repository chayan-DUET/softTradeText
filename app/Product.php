<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table= 'products';
	protected $fillable = [
        'company_no','factory_name','company_name','bday_tfd','style','fabric','color', 'quantity', 'image', 'description','steps','bday_dd','remark'];
  protected $dates = ['bday_tfd'];
  
    public  function user(){
      return $this->belongsTo(User::class);
  }
}
