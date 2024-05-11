<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="main-content">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">Modifier un mode de règlement</div>

                        <div class="card-body">
                            <form action="{{ route('mode_reglements.update', $modeReglement->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="mode_reglements">Mode de règlement</label>
                                    <input type="text" name="mode_reglements" id="mode_reglement" class="form-control" value="{{ $modeReglement->mode_reglement }}">
                                </div>

                                <button type="submit" class="btn btn-primary">Modifier le mode de règlement</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
