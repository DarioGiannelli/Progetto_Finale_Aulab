<x-layout>
    <div class="min-vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="display-3 mt-5">{{__('ui.categoryProducts')}}: 
                    @if(session('locale') == 'en')
                        {{ $category->name_en }}
                    @else
                        {{$category->name}}
                    @endif
                    </h1>
                </div>
            </div>
            <div class="row">
                @forelse ($category->products as $product)
                    <x-card 
                        :product='$product'
                    />
                @empty
                    <div class="col-12 my-5 d-flex flex-column align-items-center min-vh-100">
                        <p class="h1 text-center">{{__('ui.noProducts')}}</p>
                        <p class="h2 text-center">{{__('ui.publishArticle')}}</p>
                        <a href="{{route('products.create')}}" class='btn verde text-white rounded-pill my-3'>{{__('ui.createArticle')}} </a>
                    </div>
                @endforelse
            {{-- <div class="col-12 d-flex justify-content-center">
                {{$products->links()}}
            </div> --}}

        </div>
    </div>
</x-layout>