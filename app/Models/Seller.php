<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $table = 'sellers'; // Define the table name if different from Laravel's default

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'status',
    ];

    public function productData()
    {
        return $this->hasOne('App\Models\Product');
    }
}