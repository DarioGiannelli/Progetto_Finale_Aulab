<!-- NAVBAR-->

<nav id="navbar" class="navbar navbar-expand-lg bg-light sticky-top">
  <div class="container-fluid">


        {{-- TOGGLE DARKMODE --}}
        <button id="box" class="box">
            <span id="toggle" class="toggle toggleLight"></span>
         </button>

      <h1 class="titoloNav m-0 text-primary">PRESTO<span class="span">.</span>it</h1>
      
      <button class="navbar-toggler my-3 mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <!-- <span class="navbar-toggler-icon"></span> -->
      <i id="arrow" class="fa-solid fa-arrow-down"></i>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-5 mb-2 mb-lg-0">
          
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>

              <li class="nav-item dropdown">
                    <div class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-earth-europe"></i>
                    </div>
                    <ul class="dropdown-menu">
                     
                            <li class="dropdown-item d-flex align-items-center">
                                <x-_locale lang="it" nation="it"/> <p class="my-auto">Italiano</p>
                            </li>
                            <li class="dropdown-item d-flex align-items-center">
                                <x-_locale lang="en" nation="gb"/> <p class="my-auto">English</p>
                            </li>
                    
                    </ul>
                </li>

              <li class="nav-item">
                  
              </li>

              <li class="nav-item">
                  
              </li>

              <li class="nav-item" id="christmas">
                  <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-gift"></i></a>
              </li>

              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ Route('products.index') }}">{{__('ui.products')}}</a>
              </li>
             
            @auth

            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{__('auth.user')}} {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu">

                        <li><a class="dropdown-item" href="#"></a></li>
       
                    @if(Auth::user()->is_revisor)
                        <li>
                            <a href="{{Route('revisor.index')}} " class="dropdown-item" >{{__('ui.revisor')}}
                                <span class="badge rounded-pill bg-danger">
                                    {{ App\Models\Product::toBeRevisionedCount()}}
                                    <span class="visually-hidden">unread Messages</span> 
                                </span>
                            </a>
                        </li> 
                        <li>
                            <a href="{{Route('products.dashboard')}}" class="dropdown-item">Dashboard</a>
                        </li> 
    
                    @endif
                </ul>
            </li> --}}
             
                <li class="nav-item">
                    <a href="{{ Route('products.create') }}" class="nav-link active">{{__('ui.product')}}</a>
                </li>
              
                
            @endauth
                
                {{-- @dd(session('locale')) --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('ui.categories')}}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}">
                                @if(session('locale') == 'en')
                                    {{ $category->name_en }}
                                @else
                                    {{$category->name}}
                                @endif
                            </a></li>
                        @endforeach                
                    </ul>
                </li>

        </ul>

        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                
                <li class="ms-5 ms-lg-0">
                    <form class="d-flex" method="GET" action="{{route('products.search')}}">
                        <button type="submit" class="border-0 bg-transparent">
                            <i class="fa-solid fa-magnifying-glass fa-2x me-3"></i>
                        </button>
                        
                        <input class="form-control me-2 rounded-pill" type="search" placeholder="{{__('ui.search')}}" aria-label="Search" name="searched">
                    </form>
                </li>
            @auth
            <li class="nav-item dropdown d-flex align-items-center ms-5 ms-md-2">
                @if(!Auth::user()->is_revisor)
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('auth.user')}} <strong>{{ Auth::user()->name }}</strong>
                    </a>
                @endif

                @if(Auth::user()->is_revisor)
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('auth.user')}} <strong>{{ Auth::user()->name }}</strong>
                    </a>

                    <ul class="dropdown-menu">

                            <li><a class="dropdown-item" href="#"></a></li>
        
                    
                            <li>
                                <a href="{{Route('revisor.index')}} " class="dropdown-item" >{{__('ui.revisor')}}
                                    <span class="badge rounded-pill bg-danger">
                                        {{ App\Models\Product::toBeRevisionedCount()}}
                                        <span class="visually-hidden">unread Messages</span> 
                                    </span>
                                </a>
                            </li> 
                            <li>
                                <a href="{{Route('products.dashboard')}}" class="dropdown-item">Dashboard</a>
                            </li> 
        
                    </ul>
                @endif
            </li>
            @endauth
            
            @guest

            <li class="nav-item ms-5 ms-lg-0 d-flex align-items-center">
                <a href="{{ Route('login') }}" class="verde nav-link text-white btn rounded-pill my-2 py-2 px-4 ms-5 me-3 d-lg-block">Login</a>
            </li>

            @endguest

            @auth
            {{-- logout --}}
            <li class="nav-item ms-5 ms-lg-0 d-flex align-items-center">
                <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="linkAuth btn rosso rounded-pill py-2 px-4 ms-4 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </button>
                </form>
            </li>
            @endauth
            
              
          
            
            
        </ul>
        
          
      </div>
  </div>
</nav>

