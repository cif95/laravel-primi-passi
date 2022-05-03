<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Fonts -->

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
	<!-- Style -->

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">

	<title>Home</title>
</head>
<body>
	<header class="container">
		<nav>
			<ul>
				@foreach ($navLinks as $link)
					<li class="{{ ($link['active']) ? 'active' : '' }}">
						<a href="{{ route($link['route']) }}">
							{{ $link['text'] }}
						</a>
					</li>
				@endforeach
			</ul>
		</nav>
	</header>
	<main class="container">
		<h1>Hello World!</h1>
	</main>
	<footer></footer>
</body>
</html>