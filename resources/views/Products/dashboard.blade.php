<x-layout>
@if (session()->has('message'))
    <div class="text-center my-2 alert alert-success">
        {{ session('message') }}
    </div>
@endif

@if (session()->has('message1'))
    <div class="text-center my-2 alert alert-danger">
        {{ session('message1') }}
    </div>
@endif
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <h1> Tutti i prodotti</h1>
            
                <livewire:products-table/>

        </div>
    </div>
</div>



    






</x-layout>