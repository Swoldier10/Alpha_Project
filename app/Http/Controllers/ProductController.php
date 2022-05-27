<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store($name, $type){
        Product::create([
            'name' => $name,
            'type' => $type
        ]);

        return response()->json('Produkt wurde gespeichert');
    }
}
