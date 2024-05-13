
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
