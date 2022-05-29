<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>{{ $title }}</title>

	<script src="{{ asset('js/app.js') }}" defer></script>
	<link href="{{ mix('css/app.css') }}" rel="stylesheet" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body class="overflow-x-hidden">
	<x-headers :nav="$nav" />

	<x-drawer :nav="$nav" />


	<div class="layout">
		@yield('content')
	</div>

	@yield('outside-content')


	<x-footer :title="'NaturBirds'" />

	<x-video />

	<script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
</body>

</html>
