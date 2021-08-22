<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bd-navbar">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img src="/../images/logo_white_inteiro.png" alt="samabiel" width="95" height="30" loading="lazy" />
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link p-2 active" aria-current="page" href=" {{ route('admin.index')}} ">Home</a>
          </li>
          {{-- Dropdown Funcionários --}}
          <li class="nav-item px-2 dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Funcionários
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('admin.employees.new') }}">Registar Funcionários</a></li>
              <li><a class="dropdown-item" href="{{ route('admin.employees.list') }}">Listar Funcionários</a></li>
            </ul>
          </li>
          {{-- Dropdown Empresas --}}
          <li class="nav-item px-2 dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Empresas
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('admin.company') }}">Listar Empresas</a></li>
            </ul>
          </li>
          {{-- Dropdown Demostrativos --}}
          <li class="nav-item px-2 dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Demostrativos
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('admin.payslips.new') }}">Gerar Holerite</a></li>
              <li><a class="dropdown-item" href="#">Listar Holerites</a></li>
              <li><a class="dropdown-item" href="{{ route('admin.taxes.new') }}">Registrar Tributo</a></li>
              <li><a class="dropdown-item" href="{{ route('admin.taxes.list') }}">Listar Tributos</a></li>
            </ul>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Search -->
        <div class="row px-2">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
            <!-- <button class="btn btn-outline-success" type="submit">Procurar</button> -->
          </form>
        </div>
        <!-- Logout -->
        <a class="nav-link p-2 active" href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
</header>