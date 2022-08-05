<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return response() -> json(Product::latest()->get());
    }

    public function store(Request $request)
    {
        Product::create([
            'name' => $request -> name,
            'slug' => $request -> slug,
            'price' => $request -> price
        ]);

        return response () -> json('Successfully Created');
    }

    public function edit($id)
    {
        return response() -> json(Product::whereId($id)->first());
    }

}
