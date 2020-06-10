@extends('layout')

@section('title', 'contact')

@section('content')
	<h1>Contacto</h1>
	<form method="POST" action="{{ route('contact') }}">
		@csrf
		<input name="name" placeholder ="Nombre.."value="{{ old('name')}}"><br>
		{!! $errors->first('name','<small>:message</small><br>')!!}

		<input type="text" name="email" placeholder ="Correo.."value="{{ old('email')}}"><br>
		{!! $errors->first('email','<small>:message</small><br>')!!}

		<input name="subject" placeholder ="Asunto.."value="{{ old('subject')}}"><br>
		{!! $errors->first('subject','<small>:message</small><br>')!!}

		<textarea name="content" placeholder ="Contenido.." value="{{ old('content')}}"></textarea><br>
		{!! $errors->first('content','<small>:message</small><br>')!!}

		<button>enviar</button>
	</form>
@endsection

