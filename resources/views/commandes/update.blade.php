<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="main-content">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <h1>Modifier une commande</h1>

                        <div class="card-body">
                            <form action="{{ route('commandes.update', $commande->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                        
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><label for="date">Date:</label></td>
                                            <td><input type="text" name="date" id="date" class="form-control" value="{{ $commande->date }}"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="heure">Heure:</label></td>
                                            <td><input type="text" name="heure" id="heure" class="form-control" value="{{ $commande->heure }}"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="regle">Règle:</label></td>
                                            <td><input type="text" name="regle" id="regle" class="form-control" value="{{ $commande->regle }}"></td>
                                        </tr>
                                        <!-- Add other fields as needed -->
                                    </tbody>
                                </table>
                        
                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
