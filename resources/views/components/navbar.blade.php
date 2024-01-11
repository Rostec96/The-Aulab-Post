<nav class="navbar navbar-expand-lg">
    <div class="container-fluid fs-2">
      <i class="bi bi-newspaper fs-2"></i>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-journal-arrow-down fs-2"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>

          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{route('article.create')}}">Inserisci un articolo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('article.index')}}">Tutti gli articoli</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto {{Auth::user()->name}}
            </a>

            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              @if (Auth::user()->is_admin)
                <li><a class="dropdown-item" href="{{route('admin.dashboard')}}"><i class="text-info bi bi-person-vcard p-2 fs-4"></i>Dashboard Admin</a></li>  
              @endif

              @if (Auth::user()->is_revisor)
                <li><a class="dropdown-item" href="{{route('revisor.dashboard')}}"><i class="text-info bi bi-person-vcard p-2 fs-4"></i>Dashboard del revisore</a></li>  
              @endif

              @if (Auth::user()->is_writer)
                <li><a class="dropdown-item" href="{{route('writer.dashboard')}}"><i class="text-info bi bi-person-vcard p-2 fs-4"></i>Dashboard del redattore</a></li>  
              @endif
              
              <li><a class="dropdown-item" href=""><i class="text-info bi bi-person-vcard p-2 fs-4"></i>Profilo</a></li>
              <li><a class="dropdown-item" href="{{route('careers')}}"><i class="text-info bi bi-briefcase-fill p-2 fs-4"></i>Lavora con noi</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();"><i class="text-info bi bi-person-raised-hand p-2 fs-4"></i>Logout</a></li>
              <form method="post" action="{{route('logout')}}" id="form-logout" class="d-none">
                @csrf
              </form>
            </ul>
          </li>
          @endauth
          @guest
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto Ospite
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{route('register')}}"><i class="text-info bi bi-person-add p-2 fs-4"></i>Registrati</a></li>
              <li><a class="dropdown-item" href="{{route('login')}}"><i class="text-info bi bi-person p-2 fs-4"></i>Accedi</a></li>
            </ul>
          </li>  
          @endguest
        </ul>

        <form class="d-flex" method="GET" action="{{route('article.search')}}">
          <input class="form-control me-2" type="search" name="query" placeholder="Cosa stai cercando?" aria-label="Search">
          <button type="submit"><span>Cerca</span></button>
        </form>
      </div>
    </div>
  </nav>