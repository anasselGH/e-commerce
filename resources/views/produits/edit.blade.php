{{-- @extends('layouts.app')

@section('content') --}}
    <div class="container">
        <h2>Modifier le Produit</h2>
        <form action="{{ route('produits.update', $produit->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="codebarre">Code Barre:</label>
                <input type="text" class="form-control" id="codebarre" name="codebarre" value="{{ $produit->codebarre }}" required>
            </div>
            <div class="form-group">
                <label for="designation">Désignation:</label>
                <input type="text" class="form-control" id="designation" name="designation" value="{{ $produit->designation }}" required>
            </div>
            <div class="form-group">
                <label for="prix_ht">Prix HT:</label>
                <input type="number" class="form-control" id="prix_ht" name="prix_ht" value="{{ $produit->prix_ht }}" required>
            </div>
            <div class="form-group">
                <label for="tva">TVA:</label>
                <input type="number" class="form-control" id="tva" name="tva" value="{{ $produit->tva }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $produit->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                <img src="{{ asset('storage/' . $produit->image) }}" alt="{{ $produit->designation }}" style="max-width: 100px;">
            </div>
            <div class="form-group">
                <label for="sous_famille_id">Sous Famille:</label>
                <select class="form-control" id="sous_famille_id" name="sous_famille_id" required>
                    @foreach ($sousfamilles as $sousfamille)
                        <option value="{{ $sousfamille->id }}" @if ($sousfamille->id == $produit->sous_famille_id) selected @endif>{{ $sousfamille->libelle }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="marque_id">Marque:</label>
                <select class="form-control" id="marque_id" name="marque_id" required>
                    @foreach ($marques as $marque)
                        <option value="{{ $marque->id }}" @if ($marque->id == $produit->marque_id) selected @endif>{{ $marque->marque}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="unite_id">Unité:</label>
                <select class="form-control" id="unite_id" name="unite_id" required>
                    @foreach ($unites as $unite)
                        <option value="{{ $unite->id }}" @if ($unite->id == $produit->unite_id) selected @endif>{{ $unite->unite }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
{{-- @endsection --}}
