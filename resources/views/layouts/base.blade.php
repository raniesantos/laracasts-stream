<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="app-url" content="{{ url('/') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.min.css">
	{{-- <link rel="stylesheet" href="css/app.css"> --}}
	<title>{{ config('app.name') }}</title>
</head>
<body>
	<div id="app">
		@include('layouts.header')

		<section class="section">
			<div class="container">
				<router-view></router-view>
			</div>
		</section>
	</div>

	<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
