<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'phone_no', 'bill',
    ];

    public function websites()
    {
        return $this->belongsToMany(Website::class);
    }
}
