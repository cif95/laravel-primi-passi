<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login</title>
	<!-- Fonts -->

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
	<!-- Style -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
	<header class="container">
		<a href="{{ route('homepage') }}">Home</a>
	</header>
	<main class="container">
		<h1>Login</h1>
		<input type="text" placeholder="Username..">
		<input type="text" placeholder="Password..">
	</main>
</body>
</html>