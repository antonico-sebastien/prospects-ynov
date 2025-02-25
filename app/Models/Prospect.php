<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname', 'email', 'phone', 'shoesize'];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
