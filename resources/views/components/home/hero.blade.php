<div class="lg:h-[calc(100vh-6rem)] flex flex-col gap-8 lg:gap-4">
	<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8 lg:gap-0">
		<section class="flex flex-col gap-4 w-full pr-4">
			<p class="text-lg font-semibold uppercase text-gray-700">Welcome To NatureBirds</p>
			<h1 class="my-4 text-3xl lg:text-5xl font-bold max-w-3xl lg:leading-snug text-green-500">NaturBirds is a website that
				cares for birds, both rare or ornamental birds, as well as birds that need help.
			</h1>

			<div class="flex items-stretch gap-4">
				<a
					class="inline-flex items-center justify-center py-2 px-4 rounded-lg border border-green-500 bg-transparent text-green-500 hover:bg-green-500 hover:text-white animate-pulse"
					href="#get-started">
					Get Started
				</a>

				<a
					class="inline-flex items-center justify-center py-2 px-4 gap-2 rounded-lg border border-transparent bg-green-500 text-white"
					href="#get-started">
					<x-play-button />
					<span>Watch Now</span>
				</a>
			</div>
		</section>

		<figure class="flex items-center justify-start lg:justify-center w-full lg:border-l-2 lg:border-green-400">
			<img src="/image/hero.png" loading="lazy" alt="">
		</figure>
	</div>

	<div class="flex flex-col lg:flex-row lg:items-center justify-evenly gap-4 ">
		@foreach ($birds as $item)
			<div class="inline-flex items-center py-2 px-4 gap-3 rounded-lg border border-green-500 shadow shadow-green-500">
				<img class="w-14 aspect-square object-cover" src="/image/{{ $item['image'] }}" alt="{{ $item['name'] }}">
				<h3 class="text-xl font-semibold text-gray-700">{{ $item['name'] }}</h3>
			</div>
		@endforeach
	</div>
</div>
