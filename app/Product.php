<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'image', 'price', 'description'
    ];

  public function orders()
  {
      return $this->belongsToMany('App\order');
  }

}
