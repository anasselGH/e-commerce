{{-- @extends('layouts.app')

@section('content') --}}
    <div class="container">
        <h1>Famille Details</h1>
        <p><strong>ID:</strong> {{ $famille->id }}</p>
        <p><strong>Libelle:</strong> {{ $famille->libelle }}</p>
        <div>
            @if ($famille->image)
                <strong>Image:</strong>
                <img src="{{ asset('storage/' . $famille->image) }}" alt="Image de l'famille" style="max-width: 200px;">
            @else
                <div>Aucune image disponible</div>
            @endif
        </div>
        <a href="{{ route('familles.edit', $famille->id) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('familles.destroy', $famille->id) }}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="{{ route('familles.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
{{-- @endsection --}}
