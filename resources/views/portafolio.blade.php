@extends('layout')

@section('title', 'portafolio')

@section('content')
	<h1>Portafolio</h1>


	<ul>
				@forelse ($portafolio as $portafolioItem)
					<li> {{$portafolioItem['title']}} </li>
				@empty
					<li> No hay proyectos para mostrar</li>
			    @endforelse
	</ul>

@endsection
<Doctype>