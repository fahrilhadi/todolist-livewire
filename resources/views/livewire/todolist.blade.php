<div>
    <h3 class="mb-5">Todolist Livewire</h3>

    <form class="mb-4">
        <div class="mb-2">
            <label for="title" class="mb-1">Judul Todo</label>
            <input type="text" id="title" class="form-control shadow-none">
        </div>
        <button type="submit" class="btn btn-primary">Buat</button>
    </form>

    <hr class="mb-4">

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Todo</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Membuat Mie Udon</td>
                    <td>
                        <div class="d-flex gap-1">
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>