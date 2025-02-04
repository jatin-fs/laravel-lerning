<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Seller;

class SellerController extends Controller
{
    function listItems()
    {
        return Seller::all();
    }

    function allProducts()
    {
        return Product::with('seller')->get();
    }
}