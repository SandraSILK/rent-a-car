
<h6>Admin Tool</h6>
<ul>
	<li>
		<a href="{{ route('admin.car.create') }}" class="btn-dash {{ Route::is('admin.car.*') ? 'active' : '' }}">Pojazdy</a>
		<ul>
			@if (Route::is('admin.car.*'))
				<li><a href="">Wszystkie pojazdy</a></li>
				<li><a href="">Dodaj pojazd</a></li>
			@endif
		</ul>
	</li>
	<li>
		<a href="#" class="btn-dash">Zarządzaj rezerwacjami</a>
	</li>
</ul>