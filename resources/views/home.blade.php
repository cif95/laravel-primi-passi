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
			font-size: 1.2rem;
		}
		ul li {
			text-align: center;
			margin-right: 2rem;
			display: inline-block;
		}
		ul li.active {
			border-bottom: 4px solid rgb(169, 215, 255);
		}
		main {
			max-width: 1000px;
			margin: 0 auto;
			text-align: center;
		}
	</style>

	<title>Home</title>
</head>
<body>
	<header>
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
	<main>
		<h1>Hello World!</h1>
	</main>
	<footer></footer>
</body>
</html>