<h6>Admin Tool</h6>
<ul>
    @can('admin')
        <li><a href="{{ route('admin.car.index') }}" class="btn-dash {{ Route::is('admin.car.*') ? 'active' : '' }}">Pojazdy</a>
            <ol>
                @if (Route::is('admin.car.*'))
                    <li><a href="{{ route('admin.car.index') }}" class="btn-dash {{ Route::is('admin.car.index') ? 'active' : '' }}">Wszystkie pojazdy</a></li>

                    <li><a href="{{ route('admin.car.create') }}" class="btn-dash {{ Route::is('admin.car.create') ? 'active' : '' }}">Dodaj pojazd</a></li>
                @endif
            </ol>
        </li>
    @endcan
    <li>
        <a href="#" class="btn-dash">Rezerwacje</a>
    </li>
    <li>
        <a href="#" class="btn-dash">Rozliczeniaa</a>
    </li>   
</ul>