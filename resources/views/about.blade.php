<x-layouts :title="'About - ' . $title" :nav="$nav">
	@section('content')
		<main class="my-8">
			<div class="inline-flex items-center gap-4">
				<h1 class="text-xl lg:text-2xl font-semibold text-green-500">
					About.
				</h1>

				<x-logo />
			</div>
			<section class="lg:h-[calc(100vh-9.25rem)] w-full flex flex-col lg:flex-row-reverse lg:items-center gap-4 lg:gap-6">
				<div class="w-full">
					<h2 class="text-2xl lg:text-4xl font-semibold mb-4 text-gray-800">About Naturbirds</h2>
					<p>{{ $description }}</p>

					<div class="flex flex-col lg:flex-row items-center gap-2 lg:gap-6 mt-8">
						<button
							class="inline-flex w-full lg:w-[unset] items-center justify-center py-2 px-4 border rounded-lg font-medium text-green-400 border-green-400 hover:text-white hover:bg-green-500">Read
							More</button>
						<button id="show-video"
							class="inline-flex w-full lg:w-[unset] items-center justify-center py-2 px-4 gap-2 rounded-lg font-medium border border-transparent bg-green-500 hover:bg-green-300 text-white">
							<x-play-button />
							<span>Watch Now</span>
						</button>
					</div>
				</div>

				<figure
					class="relative flex items-center justify-center w-full p-2 bg-green-300 rounded-3xl after:absolute after:left-1/2 after:top-1/2 after:w-[90%] after:h-[90%] after:border-8 after:rounded-2xl after:-translate-x-1/2 after:-translate-y-1/2 after:border-white">
					<img src="{{ $image }}" alt="{{ $title }}" class="w-full max-w-2xl aspect-square">
				</figure>
			</section>
		</main>
	@endsection

	@section('outside-content')
		<div
			class="flex flex-col lg:flex-row items-center justify-center py-8 gap-6 lg:gap-8 lg:h-64 bg-gradient-to-t from-white to-green-400/30">
			@foreach ($company as $image)
				<img src="{{ $image }}" alt="" class="w-40 lg:w-64 object-contain" />
			@endforeach
		</div>
	@endsection
</x-layouts>
