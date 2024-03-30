

<ul class="navbar-nav sidebar sidebar-dark accordion " id="accordionSidebar" style="background-color: #257e38;">
  
    <!-- Sidebar - Brand -->
    
    {{-- <div class="sidebar-brand" style="background-color: #ffffff; height: 70px;">
      <a href="#" >
          <img src="{{asset('img/cc.jpg')}}" alt="Logo" class="img-fluid" style="width: 63px; height: auto;">
      </a>
      <h5 style="color: #257e38"><strong>DIGITAL DART</strong></h5>
    </div> --}}

    <div class="sidebar-brand" style="background-color: #ffffff; height: 70px;">
      <a href="#" class="d-flex align-items-center">
          <img src="{{asset('img/cc.jpg')}}" alt="Logo" class="img-fluid" style="width: 46px; height: auto;">
          <h6 style="color: #257e38; text-decoration: none;"><strong>Digital Dart</strong> </h6>
      </a>
  </div>
    <br><br><br>
      
     
    
    <!-- Divider -->
    {{-- <hr class="sidebar-divider my-0"> --}}
    <i class="bi bi-list toggle-sidebar-btn" style="background-color: rgb(21, 21, 21)"></i>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      @if(Auth::user()->type === 'admin')
        <a href="{{ route('admin.dashboard') }} " class="nav-link">
        <i class="fas fa-fw fa-tachometer-alt mb-0" ></i>
        <strong class="mb-0">Dashboard</strong></a>
      @elseif(Auth::user()->type === 'user')
        <a href="{{ route('user.mydart.index') }}" class="nav-link">
        <i class="fas fa-fw fa-tachometer-alt mb-0" ></i>
        <strong class="mb-0">My Dart</strong></a> 
      @endif
      {{-- <a class="nav-link" href="{{route('admin.dashboard')}}"> --}}
        
    </li>
    
    <li class="nav-item">
      @if(Auth::user()->type === 'admin')
        <a href="{{ route('admin.offer.index') }}" class="nav-link">
      @elseif(Auth::user()->type === 'user')
        <a href="{{ route('user.offer.index') }}" class="nav-link">
      @endif
      {{-- <a class="nav-link" href="{{route('admin.offer.index')}}"> --}}
        <i class="fas fa-fw fa-tachometer-alt mb-0"></i>
        <strong class="mb-0">Offre</strong></a>
    </li>
    
    @if(Auth::user()->type === 'admin')
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.membres.index')}}">
        <i class="fas fa-fw fa-tachometer-alt mb-0"></i>
        <strong class="mb-0">Membres</strong></a>
    </li>
    @endif

    @if(Auth::user()->type === 'admin')
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.paiement.dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt mb-0"></i>
        {{-- <i class="bi bi-cash-coin"></i> --}}
        <strong class="mb-0">Paiement</strong></a>
    </li>
    @endif
    
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <br><br><br>
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0 mb-0" id="sidebarToggle"></button>
    </div>
  
    
  </ul>