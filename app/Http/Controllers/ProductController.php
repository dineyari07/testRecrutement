<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        // Récupérer tous les produits depuis la base de données
        $products = Product::all();

        // Retourner les produits au format JSON
        return response()->json(['products' => $products]);
    }
}
