<footer class="py-8 px-4 flex flex-col lg:flex-row lg:items-center gap-4 bg-black">
	<section class="w-full h-full flex items-center justify-center gap-4">
		<p class="text-xl lg:text-5xl font-bold text-white">
			{{ $title }}
		</p>
		<x-logo />
	</section>
	<section class="w-full flex flex-col gap-14">
		<div class="grid grid-cols-1 lg:grid-cols-3 flex-auto gap-4">
			<div>
				<h4 class="text-lg font-bold mb-4 text-white">Explore</h4>
				<ul>
					@foreach ($footerData['explore'] as $item)
						<li class="text-white">{{ $item['title'] }}</li>
					@endforeach
				</ul>
			</div>

			<div>

				<h4 class="text-lg font-bold mb-4 text-white">Science</h4>
				<ul>
					@foreach ($footerData['science'] as $item)
						<li class="text-white">{{ $item['title'] }}</li>
					@endforeach
				</ul>
			</div>

			<div>

				<h4 class="text-lg font-bold mb-4 text-white">Spot Photograph</h4>
				<ul>
					@foreach ($footerData['spot'] as $item)
						<li class="text-white">{{ $item['title'] }}</li>
					@endforeach
				</ul>
			</div>
		</div>

		<div class="flex items-center justify-between mr-[14%]">
			<div class="flex items-center gap-8">
				@foreach ($logos as $item)
					<button class="w-8 h-8 inline-flex itemms-center justify-center">
						<box-icon color="white" type="{{ $item['type'] }}" name="{{ $item['name'] }}"></box-icon>
					</button>
				@endforeach
			</div>


			<div class="flex items-center gap-8">
				<img src="/image/appstore.jpg" alt="appstore" class="h-10 rounded-lg">
				<img src="/image/playstore.jpg" alt="play store" class="h-10 rounded-lg">
			</div>
		</div>
	</section>
</footer>
