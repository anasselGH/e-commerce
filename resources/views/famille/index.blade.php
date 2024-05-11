{{-- @extends('layouts.app')

@section('content') --}}
    <div class="container">
        <h1>Familles</h1>
        <a href="{{ route('familles.create') }}" class="btn btn-primary">Create New Famille</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Libelle</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($familles as $famille)
                    <tr>
                        <td>{{ $famille->id }}</td>
                        <td>{{ $famille->libelle }}</td>
                        <td>
                            @if ($famille->image)
                            <img src="{{ asset('storage/' . $famille->image) }}" alt="Image de famille" style="max-width: 100px;">
                            @else
                            Aucune image disponible
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('familles.show', $famille->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('familles.edit', $famille->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('familles.destroy', $famille->id) }}" method="POST" style="display: inline" onsubmit="return confirm('Are you sure you want to delete this famille?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
{{-- @endsection --}}
