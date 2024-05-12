<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="main-content">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <h1 class="card-header">Modifier une commande</h1>

                        <div class="card-body">
                            <form action="{{ route('commandes.update', $commande->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="date">Date:</label>
                                    <input type="date" name="date" id="date" class="form-control" value="{{ $commande->date }}">
                                </div>

                                <div class="form-group">
                                    <label for="heure">Heure:</label>
                                    <input type="time" name="heure" id="heure" class="form-control" value="{{ $commande->heure }}">
                                </div>

                                <div class="form-check">
                                    <label for="heure">Règle:</label>
                                    <input type="radio" class="form-check-input" id="regle_oui" name="regle" value="Oui" {{ $commande->regle == 'Oui' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="regle_oui">Oui</label>
                                    <input type="radio" class="form-check-input" id="regle_non" name="regle" value="Non" {{ $commande->regle == 'Non' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="regle_non">Non</label>
                                </div>
                                
                                <!-- Add other fields as needed -->

                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
