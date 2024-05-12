<!-- resources/views/unites/edit.blade.php -->

<!-- Modal for editing an existing unit -->
<div class="modal fade" id="editUnitModal" tabindex="-1" aria-labelledby="editUnitModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUnitModalLabel">Edit Unit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form to edit an existing unit -->
                <form id="editUnitForm" action="{{ route('unites.update', ['id' => $unite->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="unit" class="form-label">Unit</label>
                        <input type="text" class="form-control" id="unit" name="unite" value="{{ $unite->unite }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Unit</button>
                </form>
            </div>
        </div>
    </div>
</div>
