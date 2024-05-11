<!-- resources/views/etats/create.blade.php -->
{{-- @extends('layouts.app')

@section('content') --}}
    <div class="container">
        <h1>Ajouter un État</h1>
        <form action="{{ route('etats.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="etat">État:</label>
                <input type="text" class="form-control" id="etat" name="etat" value="{{ old('etat') }}">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
{{-- @endsection --}}
