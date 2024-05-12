<!-- resources/views/unites/index.blade.php -->


    <div class="container">
        <h1>List of Units</h1>
        @if ($unites->isEmpty())
            <p>No units found.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Unit</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($unites as $unite)
                        <tr>
                            <td>{{ $unite->id }}</td>
                            <td>{{ $unite->unite }}</td>
                            <td>
                                <a href="{{ route('unites.show', $unite->id) }}" class="btn btn-primary">View</a>
                                <a href="{{ route('unites.edit', $unite->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('unites.destroy', $unite->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this unit?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        <a href="{{ route('unites.create') }}" class="btn btn-success">Add New Unit</a>
    </div>

