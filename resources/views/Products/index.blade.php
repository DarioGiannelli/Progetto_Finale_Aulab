<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="display-3 text-center mt-5">I nostri annunci!</h1>
            </div>
        </div>
        <div class="row">
            
            @foreach ($products as $product)
                <x-card 
                    :product='$product'

                />
            @endforeach
            <div class="col-12 d-flex justify-content-center">
                {{$products->links()}}
            </div>
                
        </div>
        

    </div>
</x-layout>