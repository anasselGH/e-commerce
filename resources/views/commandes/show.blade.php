<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="main-content">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <h1>Détails de la commande</h1>

                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><strong>Date:</strong></td>
                                        <td>{{ $commande->date }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Heure:</strong></td>
                                        <td>{{ $commande->heure }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Règle:</strong></td>
                                        <td>{{ $commande->regle }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>mode_reglement:</strong></td>
                                        <td>{{ $commande->mode_reglement_id }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>etat:</strong></td>
                                        <td>{{ $commande->etat_id }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>user:</strong></td>
                                        <td>{{ $commande->user_id }}</td>
                                    </tr>
                                    <!-- Add other fields as needed -->
                                    <tr>
                                        <td><strong>Créé le:</strong></td>
                                        <td>{{ optional($commande->created_at)->format('d/m/Y H:i:s') }}</td>
                                                                            </tr>
                                    <tr>
                                        <td><strong>Dernière modification:</strong></td>
                                        <td>{{ optional($commande->updated_at)->format('d/m/Y H:i:s') }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button onclick="window.location='{{ route('commandes.index') }}'" class="btn btn-primary">Retour</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
