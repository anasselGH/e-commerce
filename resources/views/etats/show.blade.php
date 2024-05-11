<!-- resources/views/etats/show.blade.php -->
{{-- @extends('layouts.app')

@section('content') --}}
    <div class="container">
        <h1>Détails de l'État</h1>
        <p><strong>ID:</strong> {{ $etat->id }}</p>
        <p><strong>État:</strong> {{ $etat->etat }}</p>
        <a href="{{ route('etats.edit', $etat->id) }}" class="btn btn-primary">Modifier</a>
        <form action="{{ route('etats.destroy', $etat->id) }}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
    </div>
{{-- @endsection --}}
