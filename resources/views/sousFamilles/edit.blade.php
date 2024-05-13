<!-- resources/views/sousFamilles/edit.blade.php -->

<h1>Modifier une sous-famille</h1>
<form action="{{ route('sousFamilles.update', $sousFamille->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="libelle">Libellé :</label>
    <input type="text" name="libelle" id="libelle" value="{{ $sousFamille->libelle }}">
    <br>
    <label for="image">Image :</label>
    <input type="file" name="image" id="image">
    <br>
    <label for="famille_id">Famille :</label>
    <select name="famille_id" id="famille_id">
        @foreach($familles as $famille)
            <option value="{{ $famille->id }}" @if($famille->id == $sousFamille->famille_id) selected @endif>{{ $famille->libelle }}</option>
        @endforeach
    </select>
    <br>
    <button type="submit">Enregistrer</button>
</form>
