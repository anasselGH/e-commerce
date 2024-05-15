<!-- resources/views/sousFamilles/create.blade.php -->

<h1>Créer une nouvelle sous-famille</h1>
<form action="{{ route('sousFamilles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="libelle">Libellé :</label>
    <input type="text" name="libelle" id="libelle">
    <br>
    <label for="image">Image :</label>
    <input type="file" name="image" id="image">
    <br>
    <label for="famille_id">Famille :</label>
    <select name="famille_id" id="famille_id">
        @foreach($familles as $famille)
            <option value="{{ $famille->id }}">{{ $famille->libelle }}</option>
        @endforeach
    </select>
    <br>
    <button type="submit">Enregistrer</button>
</form>
