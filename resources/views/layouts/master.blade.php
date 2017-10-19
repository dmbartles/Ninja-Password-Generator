<!DOCTYPE html>
<html>

<head>
	<title>Ninja Password Generator</title>
  <meta charset='utf-8'>

  <!-- Styles -->
  <link href="/css/main.css" type='text/css' rel='stylesheet'>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Shojumaru&effect=shadow-multiple" rel="stylesheet">
  @stack('head')

</head>

<body>

	<header>
    <div class="content title m-b-sm font-effect-shadow-multiple">
        Ninja Password Generator
    </div>
	</header>

	<section>
    @yield('content')
	</section>

	<footer>
    <div class="content footer m-b-sm">
		    Kodiak Jetpack&copy; {{ date('Y') }}
    </div>
	</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  @stack('body')
</body>
</html>
