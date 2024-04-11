<!-- new.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Ajouter un nouveau produit</h1>

    <form action="/product" method="POST">
        @csrf
        <div>
            <label for="name">Nom du produit</label>
            <input type="text" id="name" name="name" placeholder="Nom du produit" required>
        </div>
        <div>
            <label for="priceHt">Prix HT</label>
            <input type="number" id="priceHt" name="priceHt" placeholder="Prix HT" required>
        </div>
        <button type="submit">Ajouter</button>
    </form>
@endsection
