<!-- resources/views/sousFamilles/index.blade.php -->

<h1>Liste des sous-familles</h1>
<a href="{{ route('sousFamilles.create') }}">Ajouter une sous-famille</a>
<table>
    @foreach($sousFamilles as $sousFamille)
        <tr>
            <td>
                {{ $sousFamille->libelle }}
                @if($sousFamille->familles)
                    - {{ $sousFamille->familles->libelle }}
                @else
                    - Aucune famille associée
                @endif
            </td>
            <td>

<img src="{{ asset('images/' . $sousFamille->image) }}" alt="Image de la sous-famille">


            </td>
            <td>
                <a href="{{ route('sousFamilles.show', $sousFamille->id) }}">Détails</a>
            </td>
            <td>
                <a href="{{ route('sousFamilles.edit', $sousFamille->id) }}">Modifier</a>
            </td>
            <td>
                <form action="{{ route('sousFamilles.destroy', $sousFamille->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
