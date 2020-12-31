<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Judul Post:</label>
        <input autocomplete="off" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan judul" wire:model="title">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Pesan Post:</label>
        <textarea autocomplete="off" rows="5" class="form-control" id="exampleFormControlInput2" wire:model="description" placeholder="Masukan pesan"></textarea>
        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success btn-sm">Save</button>
</form>