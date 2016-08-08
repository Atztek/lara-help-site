@extends('layouts.desctop')

@section('content')

<div class="row">
	<div class="col-md-3">
		
	</div>
	<div class="col-md-9">
		@foreach($month as $week)
		<div class="row">
			@foreach($week as $day)
				<div class="cal-cell">{{ $day['day'] }}</div>
			@endforeach
			
		</div>
		@endforeach
	</div>
</div>

@endsection