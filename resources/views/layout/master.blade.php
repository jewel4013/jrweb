<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<a href="/">Home</a>
		<a href="/about">About</a>
		<a href="/contact">Contact</a>
		<a href="/extra">Extra</a>

		@yield('content')

		@section('name')
			<h4>Section Show liner for all or some</h4>
		@show

	</div>
</body>
</html>