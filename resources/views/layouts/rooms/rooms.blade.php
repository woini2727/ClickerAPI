

	<link rel="stylesheet" type="text/css" href="{{ asset('css/sidebar.css') }}">



<div class="sidenav">
@guest

@else
<h1>Menu</h1>
	<ul class="ul-menu">
		<li>


			<a href="/game/Crear+Personaje" clase="link-menu">Seleccionar PersonajeS</a>

			
		</li>
		<li>
			<a href="/game/Mi+Personaje" clase="link-menu">Mi Personaje</a>
			
		
		</li>
		
		<li>
			<a href="/game/Trainer" clase="link-menu">Entrenamiento</a>
			
		</li>
		<li>
			<a href="/game/Perfil" clase="link-menu">Tabla de Posiciones</a>
			
		</li>

	</ul>

	
@endguest
</div>
	
