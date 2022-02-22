<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view("components.layouts.products.index", ['products' => $products]);
    }
    
    public function create()
    {
        return view("components.layouts.products.create");
    }

    public function product_details()
    {
        return view("components.layouts.products.product_details");
    }


}