@foreach ($products as $product)
    <div>
        <p>{{ $product->name }} - {{ $product->priceHt }}</p>
        <a href="/product/edit/{{ $product->id }}">Modifier</a>
        <a href="/product/delete/{{ $product->id }}">Supprimer</a> <!-- Lien pour supprimer le produit -->
    </div>
@endforeach
