<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatageriesArbic extends Model
{
    protected $guarded = [];
    public function products_ar()
    {
      return $this->hasMany(ProductsArbic::class,'catageries_arbic_id');
    }
    use HasFactory;
}
