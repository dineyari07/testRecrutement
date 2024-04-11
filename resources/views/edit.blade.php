<!-- edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Modifier le produit</h1>

    <form action="/product/update/{{ $product->id }}" method="POST">
        @csrf
        @method('PUT') <!-- Utilisation de la méthode PUT pour la mise à jour -->

        <div>
            <label for="name">Nom du produit</label>
            <input type="text" id="name" name="name" placeholder="Nom du produit" value="{{ $product->name }}" required>
        </div>
        <div>
            <label for="priceHt">Prix HT</label>
            <input type="number" id="priceHt" name="priceHt" placeholder="Prix HT" value="{{ $product->priceHt }}" required>
        </div>
        <button type="submit">Modifier</button>
    </form>
@endsection
