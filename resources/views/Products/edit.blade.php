<x-layout>


<div class="container">
    <div class="row">
        <div class="col-12">
         <h1>{{$product->name}}</h1>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <livewire:edit-product productId="{{$product->id}}"/>
         
        </div>
    </div>
</div>
    




</x-layout>