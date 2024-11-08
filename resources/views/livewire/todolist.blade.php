<div>
    <h3 class="mb-5">Todolist Livewire</h3>

    <form class="mb-4" wire:submit="save">
        <div class="mb-2">
            <label for="title" class="mb-1">Judul Todo</label>
            <input type="text" id="title" wire:model="title" class="form-control shadow-none">
        </div>
        <button type="submit" class="btn btn-primary">{{ $isEdit == true ? 'Edit Todo' : 'Buat' }}</button>
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
                @foreach ($todos as $key => $todo)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $todo->title }}</td>
                        <td>
                            <div class="d-flex gap-1">
                                <button type="button" wire:click="edit({{ $todo->id }})" class="btn btn-warning btn-sm">Edit</button>
                                <button type="button" wire:click="delete({{ $todo->id }})" wire:confirm="Apakah kamu yakin ingin menghapusnya?" class="btn btn-danger btn-sm">Hapus</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>