<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Contacts</title>

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
	<!-- Styles -->

	<style>
		body {
			color: white;
			font-family: 'Nunito', sans-serif;
			background-color: rgb(36, 36, 36);
		}
		a {
			color: rgb(169, 215, 255);
			text-decoration: none;
		}
		ul li {
			padding-right: 2rem;
			display: inline-block;
		}
		main {
			max-width: 1000px;
			margin: 0 auto;
			text-align: center;
		}
	</style>

</head>
<body>
	<header>
		<a href="{{ route('homepage') }}">Home</a>
	</header>
	<main>
		<h1>Contatti: </h1>
		<p>Indirizzo email: {{ $email }}</p>
		<p>Numero di telefono : {{ $phone }}</p>
	</main>
</body>
</html>