<!-- resources/views/etats/index.blade.php -->
{{-- @extends('layouts.app')

@section('content') --}}
    <div class="container">
        <h1>États</h1>
        <a href="{{ route('etats.create') }}" class="btn btn-primary">Ajouter un État</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>État</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($etats as $etat)
                    <tr>
                        <td>{{ $etat->id }}</td>
                        <td>{{ $etat->etat }}</td>
                        <td>
                            <a href="{{ route('etats.show', $etat->id) }}" class="btn btn-info">Afficher</a>
                            <a href="{{ route('etats.edit', $etat->id) }}" class="btn btn-primary">Modifier</a>
                            <form action="{{ route('etats.destroy', $etat->id) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
{{-- @endsection --}}
