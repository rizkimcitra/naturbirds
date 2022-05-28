<footer class="py-8 px-4 flex flex-col lg:flex-row lg:items-center gap-4 bg-black">
	<section class="w-full h-full flex items-center justify-center gap-4">
		<p class="text-5xl font-bold text-white">
			{{ $title }}
		</p>
		<x-logo />
	</section>
	<section class="w-full flex flex-col gap-4">
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
		<div class="flex items-center gap-6">
			<div class="flex items-center gap-4">
				@foreach ($logos as $item)
					<box-icon color="white" type="{{ $item['type'] }}" name="{{ $item['name'] }}"></box-icon>
				@endforeach
			</div>
		</div>
	</section>
</footer>
