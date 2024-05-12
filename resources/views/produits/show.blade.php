{{-- @extends('layouts.app')

@section('content') --}}
    <div class="container">
        <h2>Détails du Produit</h2>
        <ul>
            <li><strong>Code Barre:</strong> {{ $produit->codebarre }}</li>
            <li><strong>Désignation:</strong> {{ $produit->designation }}</li>
            <li><strong>Prix HT:</strong> {{ $produit->prix_ht }}</li>
            <li><strong>TVA:</strong> {{ $produit->tva }}</li>
            <li><strong>Description:</strong> {{ $produit->description }}</li>
            <li><strong>Image:</strong> <img src="{{ asset('storage/' . $produit->image) }}" alt="{{ $produit->designation }}" style="max-width: 200px;"></li>
            <li><strong>Sous Famille:</strong> {{ $produit->sousFamille->libelle }}</li>
            <li><strong>Marque:</strong> {{ $produit->marque->marque }}</li>
            <li><strong>Unité:</strong> {{ $produit->unite->unite }}</li>
        </ul>
    </div>
{{-- @endsection --}}
