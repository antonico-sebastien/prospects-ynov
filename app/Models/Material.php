<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;

class Material extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'stock', 'supplier_id'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
