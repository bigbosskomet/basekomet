<nav class="mt-2">
  <ul class="nav nav-legacy nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-header">Dashboard</li>
    <li class="nav-item">
        <a href="{{route('dashboard')}}" class="nav-link {{ request()->is('dashboard') ? 'active':''}}">
            <i class="nav-icon fas fa-tachometer-alt"></i><p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('profil')}}" class="nav-link {{ request()->is('profil') ? 'active':''}}">
            <i class="nav-icon fas fa-id-badge"></i><p>Profil</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('uploadpersyaratan')}}" class="nav-link">
            <i class="nav-icon fas fa-cloud-upload-alt"></i><p>Upload Persyaratan</p>
        </a>
    </li>
    {{-- Dosen --}}
    @if (auth()->user()->level=="Dosen")
    <li class="nav-header">Kategori</li>
    <li class="nav-item">
        <a href="{{route('olimpiade')}}" class="nav-link">
            <i class="nav-icon fas fa-edit"></i><p>Olimpiade Matematika</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('webinar')}}" class="nav-link">
            <i class="nav-icon fas fa-globe-asia"></i><p>Webinar</p>
        </a>
    </li>
    @endif
    {{-- Mahasiswa --}}
    @if (auth()->user()->level=="Mahasiswa")
    <li class="nav-header">Kategori</li>
    <li class="nav-item">
        <a href="{{route('olimpiade')}}" class="nav-link">
            <i class="nav-icon fas fa-edit"></i><p>Olimpiade Matematika</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('webinar')}}" class="nav-link">
            <i class="nav-icon fas fa-globe-asia"></i><p>Webinar</p>
        </a>
    </li>
    @endif
    {{-- Admin --}}
    @if (auth()->user()->level=="Admin")
    <li class="nav-header">Kategori</li>
    <li class="nav-item">
        <a href="{{route('olimpiade')}}" class="nav-link">
            <i class="nav-icon fas fa-edit"></i><p>Olimpiade Matematika</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('webinar')}}" class="nav-link">
            <i class="nav-icon fas fa-globe-asia"></i><p>Webinar</p>
        </a>
    </li>
    <li class="nav-header">Managemen</li>
    <li class="nav-item">
        <a href="{{route('webinar')}}" class="nav-link">
            <i class="nav-icon fas fa-user"></i><p>Managemen User</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('webinar')}}" class="nav-link">
            <i class="nav-icon fas fa-database"></i><p>Managemen Bank Soal</p>
        </a>
    </li>
    <li class="nav-header">Verifikator</li>
    <li class="nav-item">
        <a href="{{route('webinar')}}" class="nav-link">
            <i class="nav-icon fas fa-user-check"></i><p>Status User</p>
        </a>
    </li>
    @endif
    <li class="nav-item">
      <form id="formLogout" action="{{route('logout')}}" method="POST">@csrf</form>
        <a href="{{route('logout')}}" class="nav-link" >
          <p>LOGOUT</p>
        </a>
    </li>
  </ul>
</nav>