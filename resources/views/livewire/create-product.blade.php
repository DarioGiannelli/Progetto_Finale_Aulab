<div>
    
    
<!-- FORM DI PROVA -->

    <form wire:submit.prevent="store">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Titolo annuncio</label>
            <input type="text" wire:model="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" wire:model="description" class="form-control">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" wire:model="price" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" wire:model="brand" class="form-control">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Categoria</label>
            <input type="text" wire:model="category" class="form-control">
        </div>
       
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>

</div>
