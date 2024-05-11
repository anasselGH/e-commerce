<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="main-content">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <h1>Détails du mode de règlement</h1>

                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><strong>Mode de règlement:</strong></td>
                                        <td>{{ $modeReglement->mode_reglements }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Créé le:</strong></td>
                                        <td>{{ $modeReglement->created_at->format('d/m/Y H:i:s') }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Dernière modification:</strong></td>
                                        <td>{{ $modeReglement->updated_at->format('d/m/Y H:i:s') }}</td>
                                    </tr>
                                    <tr>
                                        <tr>
                                            <td colspan="2">
                                                <button onclick="window.location='{{ route('mode_reglements.index') }}'" class="btn btn-primary">Retour</button>
                                            </td>
                                        </tr>
                                        
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
