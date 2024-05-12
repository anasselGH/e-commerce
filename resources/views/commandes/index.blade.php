<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="main-content">
            <h1>Liste des commandes</h1>
            
            <a href="{{ route('commandes.create') }}" class="btn btn-primary mb-3">+ Ajouter</a>
            @if ($commandes->count() > 0)
            <table class="table" border="1">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Règle</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($commandes as $commande)
                    <tr>
                        <td>{{ $commande->date }}</td>
                        <td>{{ $commande->heure }}</td>
                        <td>{{ $commande->regle }}</td>
                        <td>
                            <a href="{{ route('commandes.show', $commande->id) }}">Voir</a>
                            <a href="{{ route('commandes.edit', $commande->id) }}">Modifier</a>
                            <form action="{{ route('commandes.destroy', $commande->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirmDelete('{{ $commande->regle }}')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p>Aucune commande n'a été ajoutée.</p>
            @endif
        </div>
    </div>
    <script>
        function confirmDelete(CommandeRegle ) {
            return confirm('Êtes-vous sûr de vouloir supprimer la commande du "' + CommandeRegle + '" ?');
        }
    </script>
</div>
