{{-- Blade directive to extend the layout --}}
{{-- @extends('layouts.app')

{{-- Blade section for content
@section('content') --}}
    <div class="container">
        <h1>Edit Famille</h1>
        <!-- Form to edit a famille -->
        <form action="{{ route('familles.update', $famille->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="libelle">Libelle:</label>
                <input type="text" class="form-control" id="libelle" name="libelle" value="{{ $famille->libelle }}">
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
{{-- Blade section end --}}
{{-- @endsection --}}
