
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="main-content">
            <h1>Liste des modes de règlement</h1>
            
            <a href="{{ route('mode_reglements.create') }}" class="btn btn-primary mb-3">+ Ajouter</a>
            @if ($modeReglements->count() > 0)
            <table class="table" border="1">
                <thead>
                    <tr>
                        <th>Mode de règlement</th>
                        <th >Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($modeReglements as $modeReglement)
                    <tr>
                        <td>{{ $modeReglement->mode_reglements }}</td>
                        <td>
                            
                               <a href="{{ route('mode_reglements.show', $modeReglement->id) }}">Voir</a></button>
                                <a href="{{ route('mode_reglements.edit', $modeReglement->id) }}">Modifier</a></button>
                                <form action="{{ route('mode_reglements.destroy', $modeReglement->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirmDelete('{{ $modeReglement->mode_reglements }}')">Supprimer</button>
                                </form>
                        
                                
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p>Aucun mode de règlement n'a été ajouté.</p>
            @endif
        </div>
    </div>
    <script>
        function confirmDelete(modeReglementName) {
            return confirm('Êtes-vous sûr de vouloir supprimer le mode de règlement "' + modeReglementName + '" ?');
        }
    </script>
</div>
