<!-- resources/views/unites/create.blade.php -->

<!-- Modal for creating a new unit -->
<div class="modal fade" id="createUnitModal" tabindex="-1" aria-labelledby="createUnitModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createUnitModalLabel">Create New Unit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form to create a new unit -->
                <form action="{{ route('unites.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="unit" class="form-label">Unit</label>
                        <input type="text" class="form-control" id="unit" name="unite" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Unit</button>
                </form>
            </div>
        </div>
    </div>
</div>
