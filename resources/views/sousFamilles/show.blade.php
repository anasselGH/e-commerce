<!-- resources/views/sousFamilles/show.blade.php -->

<h1>Détails de la sous-famille</h1>
<p><strong>Libellé :</strong> {{ $sousFamille->libelle }}</p>
<p><strong>Image :</strong> <!-- Dans votre vue show.blade.php -->
    <img src="{{ asset('images/' . $sousFamille->image) }}" alt="Image de la sous-famille">
    </p>
@if($sousFamille->familles)
    <p><strong>Famille :</strong> {{ $sousFamille->familles->libelle }}</p>
@else
    <p><strong>Famille :</strong> Aucune famille associée</p>
@endif
<a href="{{ route('sousFamilles.index') }}">Retour à la liste des sous-familles</a>
