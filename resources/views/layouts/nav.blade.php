<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">RENT A CAR</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('main')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('car_list')}}">Samochody</a>
      </li>
{{--       <li>
        <a class="nav-link" href="{{route('remove_reservation')}}">Odwołaj rezerwację</a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" href="/login">Zaloguj się</a>
      </li>
    </ul>
  </div>
</nav>