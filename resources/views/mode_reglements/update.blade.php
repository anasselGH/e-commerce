<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="main-content">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <h1>Modifier un mode de règlement</h1>

                        <div class="card-body">
                            <form action="{{ route('mode_reglements.update', $modeReglement->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                        
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><label for="mode_reglement">Nom du mode de règlement:</label></td>
                                            <td><input type="text" name="mode_reglement" id="mode_reglement" class="form-control" value="{{ $modeReglement->mode_reglements}}"></td>
                                        </tr>
                                    </tbody>
                                </table>
                        
                                <button type="submit" class="btn btn-primary">Modifier </button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
