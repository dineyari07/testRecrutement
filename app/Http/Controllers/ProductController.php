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

    public function new()
    {
        return view('product.new');
    }

    public function create(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'priceHt' => 'required|numeric',
        ]);

        // Création d'un nouveau produit
        $product = new Product();
        $product->name = $request->name;
        $product->priceHt = $request->priceHt;
        $product->creationDate = now(); // Remplissage automatique de la date de création
        $product->save();

        // Redirection vers la route /product
        return redirect('/product');
    }
}
