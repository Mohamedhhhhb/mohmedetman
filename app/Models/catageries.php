<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catageries extends Model
{
    protected $guarded = [];

    public function products()
      {
        return $this->hasMany(Products::class,'catageries_id');
      }
    use HasFactory;
}
