<!DOCTYPE html>
<html>
<head>
	<title>Mensaje Recibido</title>
</head>
<body>

	<p><strong>Recibiste un mensaje de:</strong> {{ $msg['name'] }} <strong> email:</strong> {{ $msg['email'] }}</p>
	<p><strong>Asunto:</strong> {{ $msg['subject'] }}</p>
	<p><strong>Contenido:</strong> {{ $msg['content'] }}</p>

</body>
</html>