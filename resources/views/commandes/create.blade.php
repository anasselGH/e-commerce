<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="main-content">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <h1>Ajouter une commande</h1>

                        <div class="card-body">
                            <form method="POST" action="{{ route('commandes.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="date">Date:</label>
                                    <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date') }}" required>
                                    @error('date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="heure">Heure:</label>
                                    <input type="time" class="form-control @error('heure') is-invalid @enderror" id="heure" name="heure" value="{{ old('heure') }}" required>
                                    @error('heure')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-check">

                                    <label for="regle">Règle:</label>

                                        <input type="radio" class="form-check-input" id="regle_oui" name="regle" value="Oui" {{ old('regle') == 'Oui' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="regle_oui">Oui</label>
                                    
                                    
                                        <input type="radio" class="form-check-input" id="regle_non" name="regle" value="Non" {{ old('regle') == 'Non' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="regle_non">Non</label>
                                    </div>
                                
                                <div class="form-group">
                                    <label for="mode_reglement_id">Mode de règlement:</label>
                                    <select class="form-control @error('mode_reglement_id') is-invalid @enderror" id="mode_reglement_id" name="mode_reglement_id" required>
                                        <option value="">Sélectionnez un mode de règlement</option>
                                        @foreach ($modesReglement as $modeReglement)
                                            <option value="{{ $modeReglement->id }}">{{ $modeReglement->mode_reglements }}</option>
                                        @endforeach
                                    </select>
                                    @error('mode_reglement_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="etat_id">État:</label>
                                    <select class="form-control @error('etat_id') is-invalid @enderror" id="etat_id" name="etat_id" required>
                                        <option value="">Sélectionnez un état</option>
                                        @foreach ($etats as $etat)
                                            <option value="{{ $etat->id }}">{{ $etat->etat }}</option>
                                        @endforeach
                                    </select>
                                    @error('etat_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="user_id">Utilisateur:</label>
                                    <select class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id" required>
                                        <option value="">Sélectionnez un utilisateur</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->nom }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">+Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
