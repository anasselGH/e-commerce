<!-- resources/views/detailcommandes/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Modifier le détail de commande</div>
                    <div class="card-body">
                        <form action="{{ route('detailcommandes.update', $detailcommande->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="commande_id">Commande:</label>
                                <select name="commande_id" id="commande_id" class="form-control">
                                    @foreach ($commandes as $commande)
                                        <option value="{{ $commande->id }}" {{ $detailcommande->commande_id == $commande->id ? 'selected' : '' }}>{{ $commande->id }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="produit_id">Produit:</label>
                                <select name="produit_id" id="produit_id" class="form-control">
                                    @foreach ($produits as $produit)
                                        <option value="{{ $produit->id }}" {{ $detailcommande->produit_id == $produit->id ? 'selected' : '' }}>{{ $produit->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="quantite">Quantité:</label>
                                <input type="number" name="quantite" id="quantite" class="form-control" value="{{ $detailcommande->quantite }}" required>
                            </div>
                            <div class="form-group">
                                <label for="prix_ht">Prix HT:</label>
                                <input type="number" name="prix_ht" id="prix_ht" class="form-control" value="{{ $detailcommande->prix_ht }}" required>
                            </div>
                            <div class="form-group">
                                <label for="tva">TVA:</label>
                                <input type="number" name="tva" id="tva" class="form-control" value="{{ $detailcommande->tva }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
