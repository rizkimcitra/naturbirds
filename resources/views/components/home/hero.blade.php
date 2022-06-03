<div class="lg:h-[calc(100vh-6rem)] flex flex-col justify-evenly gap-8 lg:gap-4 pb-16">
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

				<button id="show-video"
					class="inline-flex items-center justify-center py-2 px-4 gap-2 rounded-lg border border-transparent bg-green-500 text-white">
					<x-play-button />
					<span>Watch Now</span>
				</button>
			</div>
		</section>

		<figure
			class="relative flex items-center justify-start lg:justify-center w-full max-w-xl aspect-square rounded-3xl bg-green-300 after:w-[90%] after:h-[90%] after:absolute after:left-1/2 after:top-1/2 after:rounded-3xl after:-translate-x-1/2 after:-translate-y-1/2 after:border-8 after:border-white">
			<img src="/image/hero.png" loading="lazy" alt="" class="w-full">
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
