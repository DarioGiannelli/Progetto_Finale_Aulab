<!-- NAVBAR DI PROVA -->

<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" aria-label="Fourth navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Expand at md</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ Route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="">Prodotti</a>
          </li>
         
          @auth
          
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="">Admin</a>
          </li>
         
          @endauth

          @Auth
          <li class="nav-item">
            <a class="nav-link" href="">Crea prodotto</a>
          </li>
          @endAuth
        </ul>
        <ul class="navbar-nav mx-auto mb-2 mb-md-0">
          @guest
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ Route('register') }}">Registrati</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ Route('login') }}">Login</a>
          </li>
          
          @endguest
          
          @Auth
          <li class="nav-item">
            <a class="nav-link" aria-current="page"> Bentornato {{ Auth::user()->name }}</a>
          </li>
          <li class="nav-item mx-2">
            <form action="{{ route('logout') }}" method="POST">
            @csrf
              <button class="btn btn-primary">Logout</button>
            </form>
            @endAuth
          </li>
        </ul>
      </div>
    </div>
  </nav>