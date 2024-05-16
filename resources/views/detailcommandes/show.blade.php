<!-- resources/views/detailcommandes/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Détail de la commande</div>
                    <div class="card-body">
                        <div>
                            <strong>Commande:</strong> {{ $detailcommande->commande_id }}
                        </div>
                        <div>
                            <strong>Produit:</strong> {{ $detailcommande->produit_id }}
                        </div>
                        <div>
                            <strong>Quantité:</strong> {{ $detailcommande->quantite }}
                        </div>
                        <div>
                            <strong>Prix HT:</strong> {{ $detailcommande->prix_ht }}
                        </div>
                        <div>
                            <strong>TVA:</strong> {{ $detailcommande->tva }}
                        </div>
                        <div>
                            <a href="{{ route('detailcommandes.index') }}" class="btn btn-primary">Retour</a>
                            <a href="{{ route('detailcommandes.edit', $detailcommande->id) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('detailcommandes.destroy', $detailcommande->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce détail de commande ?')">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
