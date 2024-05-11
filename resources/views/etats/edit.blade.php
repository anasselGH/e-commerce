{{-- <!-- resources/views/etats/edit.blade.php -->
@extends('layouts.app')

@section('content') --}}
    <div class="container">
        <h1>Modifier l'État</h1>
        <form action="{{ route('etats.update', $etat->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="etat">État:</label>
                <input type="text" class="form-control" id="etat" name="etat" value="{{ $etat->etat }}">
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
{{-- @endsection --}}
