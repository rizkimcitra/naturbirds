<x-layouts :nav="$nav" :title="'Blog - ' . $title">
	@section('content')
		<main class="my-8">
			<section class="w-full lg:h-[calc(100vh-6rem)] flex flex-col lg:flex-row-reverse lg:items-center gap-4 lg:gap-8">
				<div class="w-full">
					<h1 class="text-2xl lg:text-4xl font-semibold mb-8 text-gray-800">{{ $hero_title }}</h1>

					<button
						class="inline-flex items-center justify-center py-3 px-6 font-medium rounded-xl border border-green-400 text-green-400 bg-white shadow shadow-green-300 hover:bg-green-400 hover:text-white">
						See More Blogs
					</button>
				</div>

				<div class="flex flex-col lg:flex-row items-center gap-4 rounded-xl overflow-hidden bg-green-300">
					<div class="w-full py-4 px-4 lg:px-6">
						<h2 class="text-lg lg:text-2xl font-semibold mb-4 text-gray-800">
							{{ $card_title }}
						</h2>
						<p class="mb-8 text-gray-700">
							{{ $card_description }}
						</p>
						<a href="/blog/{{ $card_title }}" class="font-medium text-green-700">Read More</a>
					</div>

					<figure class="w-full lg:w-11/12 h-full aspect-square">
						<img src="{{ $card_image }}" alt="{{ $card_title }}" class="w-full h-full rounded-xl aspect-square">
					</figure>
				</div>
			</section>

			<section class="w-full lg:h-screen py-[10%]">
				<div
					class="w-full h-full flex flex-col lg:flex-row lg:items-center gap-8 lg:gap-16 p-6 lg:py-4 lg:px-8 rounded-3xl bg-green-300">
					<figure class="relative w-1/2 lg:w-3/4 flex items-center justify-center">
						<img src="{{ $app_image }}" alt="{{ $app_title }}" loading="lazy"
							class="w-[30rem] scale-150 translate-x-[40%] lg:translate-x-0">
					</figure>

					<div class="w-full">
						<h2 class="text-2xl lg:text-4xl font-semibold mb-4 text-gray-800">
							{{ $app_title }}
						</h2>
						<p class="text-lg max-w-prose mb-16 text-gray-700">
							{{ $app_description }}
						</p>

						<div class="flex items-center gap-8">
							<img src="/image/appstore.jpg" alt="appstore" class="w-28 lg:w-40">
							<img src="/image/playstore.jpg" alt="playstore" class="w-28 lg:w-40">
						</div>
					</div>
				</div>
			</section>
		</main>
	@endsection
</x-layouts>
