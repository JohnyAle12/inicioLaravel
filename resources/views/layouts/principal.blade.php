<!DOCTYPE html>
<html>
<head>
	<title>Plantilla Blade</title>
	{!!Html::style('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css')!!}
	{!!Html::script('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')!!}
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<div style="background: green">
					Desde blade
				</div>

				@yield('contenido')
			</div>
		</div>
	</div>
	
</body>
</html>