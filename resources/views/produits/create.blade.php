{{-- @extends('layouts.app')

@section('content') --}}
    <div class="container">
        <h2>Ajouter un Produit</h2>
        <form action="{{ route('produits.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="codebarre">Code Barre:</label>
                <input type="text" class="form-control" id="codebarre" name="codebarre" required>
            </div>
            <div class="form-group">
                <label for="designation">Désignation:</label>
                <input type="text" class="form-control" id="designation" name="designation" required>
            </div>
            <div class="form-group">
                <label for="prix_ht">Prix HT:</label>
                <input type="number" class="form-control" id="prix_ht" name="prix_ht" required>
            </div>
            <div class="form-group">
                <label for="tva">TVA:</label>
                <input type="number" class="form-control" id="tva" name="tva" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" required accept="image/*">
            </div>
            <div class="form-group">
                <label for="sous_famille_id">Sous Famille:</label>
                <select class="form-control" id="sous_famille_id" name="sous_famille_id" required>
                    @foreach ($sousfamilles as $sousfamille)
                        <option value="{{ $sousfamille->id }}">{{ $sousfamille->libelle }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="marque_id">Marque:</label>
                <select class="form-control" id="marque_id" name="marque_id" required>
                    @foreach ($marques as $marque)
                        <option value="{{ $marque->id }}">{{ $marque->marque }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="unite_id">Unité:</label>
                <select class="form-control" id="unite_id" name="unite_id" required>
                    @foreach ($unites as $unite)
                        <option value="{{ $unite->id }}">{{ $unite->unite }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
{{-- @endsection --}}
