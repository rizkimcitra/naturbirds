<nav class="hidden lg:flex items-center gap-4 lg:gap-8">
	@foreach ($nav as $data)
		<a class="md:text-lg font-semibold text-gray-800 hover:text-gray-700"
			href="{{ url($data['href']) }}">{{ $data['name'] }}</a>
	@endforeach
</nav>
