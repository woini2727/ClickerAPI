@section('jugador2')
	

	
 <div id="map" class="mapa"></div>
 @foreach($markers as $marka)
 	<div data-marka="{{$marka->id}}" class="markerConteiner" hidden>
 		<p data-marka="{{$marka->distancia}}" hidden class="distancia{{$marka->id}}">distancia</p>
 		<p data-marka="{{$marka->latitud}}" hidden class="latitud{{$marka->id}}">latitud</p>
 		<p data-marka="{{$marka->longitud}}" hidden class="longitud{{$marka->id}}">longitud</p>
 		<p data-marka="{{$marka->oro}}" hidden class="oro{{$marka->id}}">oro</p>
 		<p data-marka="{{$marka->millas}}" hidden class="millas{{$marka->id}}">millas</p>
 		<p data-marka="{{$marka->experiencia}}" hidden class="experiencia{{$marka->id}}">experiencia</p>
 		<p data-marka="{{$marka->ataque}}" hidden class="ataque{{$marka->id}}">ataque</p>
 		<p data-marka="{{$marka->vida}}" hidden class="vida{{$marka->id}}">vida</p>
 		<p data-marka="{{$marka->completa}}" hidden class="completa{{$marka->id}}">vida</p>
 	</div>
	 <div id="infobox{{$marka->id}}" class="infoboxMapa" >
            <div id="siteNotice">
            </div>
            <h1 id="firstHeading" >Botín</h1>
            <div id="bodyContent">
            <h3>Distancia: {{$marka->distancia}}</h3>
            @if($marka->oro)
            <p><b>+{{$marka->oro}} Oro</b></p>
            @endif
            @if($marka->millas)
            <p><b>+{{$marka->millas}} Millas</b></p>
            @endif
            @if($marka->experiencia)
            <p><b>+{{$marka->experiencia}} Experiencia</b></p>
            @endif
            @if($marka->ataque)
            <p><b>+{{$marka->ataque}} Ataque</b></p>
            @endif
            @if($marka->vida)
            <p><b>+{{$marka->ataque}} Vida</b></p>
            @endif
            <form method="post" action="{{route('viajar')}}">
            	@csrf
            	<input type="submit" name="" value="Viajar y Cobrar">
            </form>
            
       </div>
       </div>
 @endforeach

 

    <script type="text/javascript" src="{{asset("js/mapaPrincipalV2.js")}}"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key={{env("GOOGLE_MAP_KEY")}}&callback=Mapa.iniciar">
    </script>

@endsection

