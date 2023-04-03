<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsArbic extends Model
{
    public function section_ar()
    {


         return $this->belongsTo(CatageriesArbic::class,'catageries_arbic_id');




    }
    use HasFactory;
}
