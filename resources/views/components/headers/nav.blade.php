<nav class="hidden lg:flex items-center gap-4 lg:gap-8">
	@foreach ($nav as $data)
		<a class="md:text-lg font-semibold text-gray-800 hover:text-gray-700"
			href="{{ $data['href'] }}">{{ $data['name'] }}</a>
	@endforeach
	<a class="inline-flex items-center justify-center py-2 px-4 rounded-lg bg-green-500 hover:bg-green-300 text-white"
		href="/contact-us">
		Contact Us
	</a>

</nav>
