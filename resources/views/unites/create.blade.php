
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
