<div class="shadow sticky-top">

  <div class="containder-fluid py-1 ms-auto text-bg-secondary">  
      <div class="container">
          <i class="bi bi-telephone-fill me-3">
            <span class="ms-1">8785964587</span>
          </i>

          <i class="bi bi-envelope-fill me-3">
            <span class="ms-1">abc.com</span>
          </i>
      </div>
  </div>
  
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-primary py-2" data-bs-theme="light">
    <div class="container">
      
      <a class="navbar-brand" href="/"><h3 class="m-0 p-0">Coco Preschool</h3></a>
  
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('facilities')}}">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('program')}}">Our Program</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('gallery')}}">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admission">Admission</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
          </li>

          @if(Auth::check())
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="nav-link" href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Logout') }}</a>
            </form>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          @endif

        </ul>
      </div>
    </div>
  </nav>


</div>