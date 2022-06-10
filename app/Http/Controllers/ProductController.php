<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Throwable;

class ProductController extends Controller
{
    public function store($name, $type){
        Product::create([
            'name' => $name,
            'type' => $type,
            'quantity' => 0
        ]);

        return response()->json([
            "message" => "Produkt wurde gespeichert"
        ], 201);
    }

    public function check_product_existence($name){
        if(Product::all()->where('name', $name)->count() === 0)
        {
            return 0;
        }
            return 1;
    }

    public function product_undo_quantity($name, $quantity){
        $product = Product::all()->where('name', $name)->first();
        $product->update([
           'quantity' => $product['quantity'] + floatval($quantity)
        ]);
        return 1;
    }

    public function check_product_quantity($name, $quantity){
        $product = Product::all()->where('name', $name)->first();
        if($product['quantity'] < floatval($quantity))
        {
            return intval($quantity);
        }
        else
        {
            $product->update([
               'quantity' => $product['quantity'] - floatval($quantity)
            ]);
            return 1;
        }
    }

    public function increase_quantity($no_hives, $honey_type){
        try {
            $product = Product::all()->where('type', $honey_type)->first();
            if($product !== null)
            {
                $product->update([
                    'quantity' => $product['quantity'] + $no_hives * rand(4535, 9071),
                ]);
                return response()->json([
                    "message" => "Produktmenge wurde aktualisiert"
                ], 201);
            }
            else
            {
                Product::create([
                    'name' => $honey_type,
                    'type' => $honey_type,
                    'quantity' => $no_hives * rand(4535, 9071)
                ]);
                return response()->json([
                    "message" => "Produkt wurde erstellt"
                ], 201);
            }
        }
        catch (Throwable $e)
        {
            return response()->json($e);
        }
    }
}
