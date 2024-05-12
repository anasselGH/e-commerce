<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="main-content">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">Modifier une commande</div>

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

                                <div class="form-group">
                                    <label for="regle">Règle:</label>
                                    <input type="text" name="regle" id="regle" class="form-control" value="{{ $commande->regle }}">
                                </div>

                                <!-- Add other fields as needed -->

                                <button type="submit" class="btn btn-primary">Modifier la commande</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
