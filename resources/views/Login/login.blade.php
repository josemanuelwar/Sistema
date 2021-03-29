<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<form method="post" action="{{route('_login_')}}">
		 @csrf
		 <input type="hidden" name="_token" value="{{ csrf_token() }}" />
		<label>
			ingresa el nombre
		</label>
		<input type="text" name="name">
		<label>
			contraseña
		</label>
		<input type="password" name="password">

		<input type="submit" name="accesar">
	</form>
</body>
</html>