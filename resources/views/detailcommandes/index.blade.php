<!-- resources/views/detailcommandes/index.blade.php -->

{{-- @extends('layouts.app')

@section('content') --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Liste des détails de commande</div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Commande</th>
                                    <th scope="col">Produit</th>
                                    <th scope="col">Quantité</th>
                                    <th scope="col">Prix HT</th>
                                    <th scope="col">TVA</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($details_commande as $detailcommande)
                                    <tr>
                                        <th scope="row">{{ $detailcommande->id }}</th>
                                        <td>{{ $detailcommande->commande_id }}</td>
                                        <td>{{ $detailcommande->produit_id }}</td>
                                        <td>{{ $detailcommande->quantite }}</td>
                                        <td>{{ $detailcommande->prix_ht }}</td>
                                        <td>{{ $detailcommande->tva }}</td>
                                        <td>
                                            <a href="{{ route('detailcommandes.show', $detailcommande->id) }}" class="btn btn-primary">Afficher</a>
                                            <a href="{{ route('detailcommandes.edit', $detailcommande->id) }}" class="btn btn-warning">Modifier</a>
                                            <form action="{{ route('detailcommandes.destroy', $detailcommande->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce détail de commande ?')">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- @endsection --}}
