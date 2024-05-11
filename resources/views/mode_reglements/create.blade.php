<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="main-content">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <h1>Ajouter un mode de règlement</h1>

                        <div class="card-body">
                            <form method="POST" action="{{ route('mode_reglements.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="mode_reglements">Mode de règlement:</label>
                                    <input type="text" class="form-control @error('mode_reglements') is-invalid @enderror" id="mode_reglements" name="mode_reglements" value="{{ old('mode_reglements') }}" required>
                                    @error('mode_reglements')
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
