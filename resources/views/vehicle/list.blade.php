@extends('app')

@section('content')
<div class="container">
	<div class="row">
		@forelse($vehicles as $vehicle)
		    <li>{{ $vehicle->name }}</li>
		@empty
		    <p>No vehicles</p>
		@endforelse
	</div>
</div>
@endsection
