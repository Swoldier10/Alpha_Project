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

    public function increase_quantity($no_hives, $honey_type, $honey_name){
        $product = Product::all()->where('name', $honey_type)->first();
        if($product !== null)
        {
            $product->update([
               'quantity' => $product['quantity'] + $no_hives * (27000/3)
            ]);
            return response()->json('Produktmenge wurde aktualisiert');
        }
        else
        {
            Product::create([
                'name' => $honey_name,
                'type' => $honey_type,
                'quantity' => $no_hives * (27000/3)
            ]);
            return response()->json('Produkt wurde erstellt');
        }
    }
}
