<form>
    <input type="hidden" wire:model="post_id">
    <div class="form-group">
        <label for="exampleFormControlInput1">Judul post:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Judul" wire:model="title">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Pesan Post:</label>
        <textarea type="email" class="form-control" id="exampleFormControlInput2" wire:model="description" placeholder="Masukan Pesan"></textarea>
        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="update()" class="btn btn-dark btn-sm">Update</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger btn-sm">Cancel</button>
</form>