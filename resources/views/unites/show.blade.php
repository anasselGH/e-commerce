<!-- resources/views/unites/show.blade.php -->

    <div class="container">
        <h1>Unit Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Unit ID: {{ $unite->id }}</h5>
                <p class="card-text"><strong>Unit:</strong> {{ $unite->unite }}</p>
                <!-- Add other details here if needed -->
            </div>
        </div>
        <a href="{{ route('unites.index') }}" class="btn btn-primary mt-3">Back to Units List</a>
    </div>

