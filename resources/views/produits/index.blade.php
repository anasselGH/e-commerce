{{-- @extends('layouts.app')

@section('content') --}}
    <div class="container">
        <h2>Liste des Produits</h2>
        <a href="{{ route('produits.create') }}" class="btn btn-primary mb-2">Ajouter un Produit</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Code Barre</th>
                    <th>Désignation</th>
                    <th>Prix HT</th>
                    <th>TVA</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Sous Famille</th>
                    <th>Marque</th>
                    <th>Unité</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produits as $produit)
                    <tr>
                        <td>{{ $produit->codebarre }}</td>
                        <td>{{ $produit->designation }}</td>
                        <td>{{ $produit->prix_ht }}</td>
                        <td>{{ $produit->tva }}</td>
                        <td>{{ $produit->description }}</td>
                        <td><img src="{{ asset('storage/' . $produit->image) }}" alt="{{ $produit->designation }}" style="max-width: 100px;"></td>
                        <td>{{ optional($produit->sousFamille)->libelle }}</td>
                        <td>{{ optional($produit->marque)->marque }}</td>
                        <td>{{ optional($produit->unite)->unite }}</td>
                        <td>
                            <a href="{{ route('produits.show', $produit->id) }}" class="btn btn-info btn-sm">Voir</a>
                            <a href="{{ route('produits.edit', $produit->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                            <form action="{{ route('produits.destroy', $produit->id) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')">Supprimer</button>
                            </form>
                            <!-- Add delete button if needed -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
{{-- @endsection --}}
