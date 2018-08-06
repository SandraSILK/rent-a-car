
<h6>Admin Tool</h6>
<ul>
    <li><a href="{{ route('admin.car.index') }}" class="btn-dash {{ Route::is('admin.car.*') ? 'active' : '' }}">Pojazdy</a>
        <ol>
            @if (Route::is('admin.car.*'))
                <li><a href="{{ route('admin.car.index') }}" class="btn-dash {{ Route::is('admin.car.index') ? 'active' : '' }}">Wszystkie pojazdy</a></li>
                @can('super-admin', App\User::class)
                    <li><a href="{{ route('admin.car.create') }}" class="btn-dash {{ Route::is('admin.car.create') ? 'active' : '' }}">Dodaj pojazd</a></li>
                @endcan
            @endif
        </ol>
    </li>
    <li>
        <a href="#" class="btn-dash">Zarządzaj rezerwacjami</a>
    </li>
</ul>