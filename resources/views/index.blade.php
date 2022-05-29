<x-layouts :title="$title" :nav="$nav">
	@section('content')
		<main>
			<x-home.hero :birds="$birds" />
		</main>
	@endsection
</x-layouts>
