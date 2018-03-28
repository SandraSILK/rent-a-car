<a href="{{ route('admin.home') }}" class="logo"><h4><strong>Admin Tool</strong></h4></a>
<ul>
	<li><a href="{{ route('admin.car.create')}}">Dodaj auto</a></li>
{{-- 	<li><a href="#">Zarządzaj podstronami</a></li>
	<li><a href="#" class="{{ Route::is('knp.*') ? 'active' : ''}}">Portal Wiedzy</a></li>
		@if (Route::is('knp.*'))
		<ol>	
			<li><a href="#" class="">| Wszystkie wpisy</a></li>
			<li><a href="#" class="">| Dodaj wpis</a></li>
		</ol>
		@endif --}}
	{{-- <li><a href="{{ route('knp.index') }}#">Aktualności</a></li> --}}

</ul>
