<aside id="drawer"
	class="fixed right-0 lg:hidden inset-y-0 w-1/2 transition-all duration-300 bg-gray-900 translate-x-96 opacity-0">
	<div class="flex flex-col gap-4 w-full h-full py-4">
		<section class="flex items-center justify-between w-full px-6 sm:px-8 py-4">
			<button id="drawer-btn-close"
				class="inline-flex items-center justify-center p-2 rounded bg-transparent border border-green-500 text-white hover:bg-gray-800">
				<box-icon name="x" color="white"></box-icon>
			</button>
			<x-logo />
		</section>

		<section class="flex flex-col w-full">
			@foreach ($nav as $item)
				<a href="{{ url($item['href']) }}"
					class="inline-flex items-center w-full py-4 px-6 sm:px-8 text-white hover:bg-gray-700">{{ $item['name'] }}</a>
			@endforeach
		</section>
	</div>
</aside>
