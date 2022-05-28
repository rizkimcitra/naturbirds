<header class="w-full h-24">
	<div class="layout flex items-center justify-between h-full">
		<div class="flex items-center gap-3">
			<p class="text-2xl font-semibold">Naturebirds</p>
			<x-logo />
		</div>


		{{ json_encode($nav) }}
		{{-- <x-headers.nav :nav="$nav" /> --}}

		<button id="drawer-btn"
			class="inline-flex items-center justify-center lg:hidden text-lg p-2 rounded bg-green-600 hover:bg-green-500">
			<box-icon name="menu" color="white"></box-icon>
		</button>

	</div>
</header>
