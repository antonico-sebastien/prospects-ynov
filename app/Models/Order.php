<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['prospect_id', 'status', 'firstname', 'lastname', 'email', 'phone', 'shoesize', 'comment'];

    public static function createFromProspect(Prospect $prospect)
    {
        return static::create([
            'prospect_id' => $prospect->id,
            'status' => 'new',
            'firstname' => $prospect->firstname,
            'lastname' => $prospect->lastname,
            'email' => $prospect->email,
            'phone' => $prospect->phone,
            'shoesize' => $prospect->shoesize,
            'comment' => '',
        ]);
    }

    public function materials()
    {
        return $this->belongsToMany(Material::class);
    }
}
