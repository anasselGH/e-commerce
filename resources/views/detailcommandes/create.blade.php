<!-- resources/views/detailcommandes/create.blade.php -->

{{-- @extends('layouts.app')

@section('content') --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Créer un nouveau détail de commande</div>
                    <div class="card-body">
                        <form action="{{ route('detailcommandes.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="commande_id">Commande:</label>
                                <select name="commande_id" id="commande_id" class="form-control">
                                    @foreach ($commandes as $commande)
                                        <option value="{{ $commande->id }}">{{ $commande->id }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="produit_id">Produit:</label>
                                <select name="produit_id" id="produit_id" class="form-control">
                                    @foreach ($produits as $produit)
                                        <option value="{{ $produit->id }}">{{ $produit->designation }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="quantite">Quantité:</label>
                                <input type="number" name="quantite" id="quantite" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="prix_ht">Prix HT:</label>
                                <input type="number" name="prix_ht" id="prix_ht" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="tva">TVA:</label>
                                <input type="number" name="tva" id="tva" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Créer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- @endsection --}}
