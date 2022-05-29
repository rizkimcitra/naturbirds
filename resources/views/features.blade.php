<x-layouts :title="'Features - ' . $title" :nav="$nav">
	@section('content')
		<main class="my-8 lg:min-h-screen lg:-mt-24 flex flex-col justify-center gap-24">
			<section>
				<div class="inline-flex items-center gap-3 mb-8">
					<h1 class="text-xl lg:text-2xl font-semibold mb-4 text-green-500">Features</h1>
					<x-logo />
				</div>
				<h2 class="text-2xl lg:text-4xl font-semibold max-w-xl text-gray-800">{{ $subtitle }}</h2>
			</section>


			<section class="flex flex-col lg:flex-row items-stretch gap-4 w-full">
				@foreach ($cards as $item)
					<div class="w-full p-6 lg:p-8 rounded-lg shadow-xl bg-white">
						<img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-10 aspect-square mb-4">
						<h3 class="text-lg lg:text-xl font-semibold mb-4 text-gray-800">
							{{ $item['title'] }}
						</h3>
						<p class="text-sm lg:text-base mb-4">{{ $item['description'] }}</p>

						<a href="/about" class="font-medium text-green-500 hover:text-green-600">Learn More</a>
					</div>
				@endforeach
			</section>
		</main>
	@endsection

	@section('outside-content')
		<section class="w-full bg-gradient-to-r py-8 lg:h-screen from-green-200 to-white">
			<div class="w-full h-full flex flex-col lg:flex-row lg:items-center gap-4">
				<div class="w-[90%] lg:w-full mx-auto lg:mx-[unset] lg:pl-[10%]">
					<h2 class="text-2xl lg:text-4xl font-semibold max-w-xl mb-4 text-gray-800">{{ $subhero_title }}</h2>
					<p class="lg:text-lg mb-16 max-w-prose text-gray-700">{{ $subhero_description }}</p>

					<button
						class="inline-flex items-center justify-center py-4 px-8 rounded-lg bg-green-300 hover:bg-green-600 text-white shadow-lg shadow-green-300">
						Learn More
					</button>
				</div>

				<figure class="flex items-center justify-center w-full">
					<img src="{{ $subhero_image }}" alt="{{ $subhero_title }}" class="w-full ">
				</figure>
			</div>
		</section>
	@endsection
</x-layouts>
