<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="display-3 text-center mt-5">{{__('ui.ourProducts')}}</h1>
            </div>
        </div>
        <div class="row">
            
            @forelse ($products as $product)
                <x-card 
                    :product='$product'


                />
                @empty
                <div class="col-12 min-vh-100">
                    <div class="alert-warning py-3 text-center text-white">
                         <p class="h3">
                             {{ __('ui.noProducts') }}
                        </p>
                    <div>
                </div>
            @endforelse
            <div class="col-12 d-flex justify-content-center">
                {{$products->links()}}
            </div>
                
        </div>
        

    </div>
</x-layout>