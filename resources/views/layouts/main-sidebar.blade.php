@include('layouts.head')
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
@endsection
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <h6 class="badge text-bg-light">Bienvenu {{auth()->user()->name}}</h6>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          {{-- Home --}}
          <li class="nav-item menu-open">
            <a href="{{route('dashboard')}}" class="nav-link active">
              <i class="bi bi-house"></i>
              <p>
                Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          {{-- Jardinier --}}
          <li class="nav-item">
            <a href="{{route('jardinier')}}" class="nav-link">
              <i class="bi bi-person"></i>
              <p>
                Jardinier
              </p>
            </a>
          </li>
          {{-- Jardin --}}
          <li class="nav-item">
            <a href="{{route('jardin')}}" class="nav-link">
              <i class="bi bi-bounding-box-circles"></i>
              <p>
                Jardin
                <span style="font-size: 0.-em;" class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          
          {{-- Plante --}}
          <li class="nav-item">
            <a href="{{url('plante')}}" class="nav-link">
              <i class="bi bi-flower3"></i>
              <p>
                Plante
              </p>
            </a>
          </li>
          {{-- Contenu --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="bi bi-box-seam"></i>
              <p>
                Contenu
              </p>
            </a>
          </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>