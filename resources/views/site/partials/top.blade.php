<header class="navbar navbar-expand-md navbar-dark bd-navbar">
    <nav class="container flex-wrap flex-md-nowrap" aria-label="Main-navigation">
        <a class="navbar-brand p-0 me-2" href="#">
            <img class="d-block my-1" src="/../images/logo_white_inteiro.png" alt="samabiel" width="95" height="30">
        </a>
        <div id="bdNavbar" class="collapase navbar-collapse">
            <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav p-5 py-md-0">
                <li class="nav-item px-2 col-6 col-md-auto">
                    <a class="nav-link p-2 active" aria-current="page" href=" {{ route('admin.index')}} ">Home</a>
                </li>
                {{-- Dropdown Funcionários --}}
                <li class="nav-item px-2 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Funcionários
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Registar Funcionários</a></li>
                      <li><a class="dropdown-item" href="#">Listar Funcionários</a></li>
                    </ul>
                </li>
                {{-- Dropdown Empresas --}}
                <li class="nav-item px-2 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Empresas
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Registar Empresas</a></li>
                      <li><a class="dropdown-item" href="#">Listar Empresas</a></li>
                    </ul>
                </li>
                {{-- Dropdown Demostrativos --}}
                <li class="nav-item px-2 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Demostrativos
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Gerar Holerites</a></li>
                      <li><a class="dropdown-item" href="#">Listar Holerites</a></li>
                      <li><a class="dropdown-item" href="#">Registar Impostos</a></li>
                      <li><a class="dropdown-item" href="#">Listar Impostos</a></li>
                    </ul>
                </li>
                <div class="row px-5">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                <li class="nav-item">
                  <a class="nav-link p-2 active" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </li>
            </ul>
        </div>
    </nav>
</header>