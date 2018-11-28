<nav class="navbar navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#" class="btn-dash">Moje Rezerwacje</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('reservation.show') }}">Odwołaj rezerwację</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" class="btn-dash">Moje Rozliczenia</a>
            </li>
        </ul>
    </div>
</nav>