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

    public function edit($id)
    {
        // Récupérer le produit à modifier
        $product = Product::findOrFail($id);

        // Retourner la vue d'édition avec les informations du produit
        return view('product.edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'priceHt' => 'required|numeric',
        ]);

        // Récupérer le produit à modifier
        $product = Product::findOrFail($id);

        // Mettre à jour les propriétés du produit
        $product->name = $request->name;
        $product->priceHt = $request->priceHt;
        $product->dateUpdate = now(); // Remplissage automatique de la date de modification
        $product->save();

        // Redirection vers la route /product
        return redirect('/product');
    }

    public function delete($id)
    {
        // Récupérer le produit à supprimer
        $product = Product::findOrFail($id);

        // Supprimer le produit de la base de données
        $product->delete();

        // Redirection vers la route /product
        return redirect('/product');
    }
}
