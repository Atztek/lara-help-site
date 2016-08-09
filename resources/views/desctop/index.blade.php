@extends('layouts.desctop')

@section('content')

<div class="row">
	<div class="col-md-3">
		
	</div>
	<div class="col-md-9 month">
		<div class="row headings">
			<div class="cal-cell">Пон</div>
			<div class="cal-cell">Втор</div>
			<div class="cal-cell">Среда</div>
			<div class="cal-cell">Четверг</div>
			<div class="cal-cell">Пятница</div>
			<div class="cal-cell">Суббота</div>
			<div class="cal-cell">Воскресенье</div>
		</div>
		@foreach($month as $week)
		<div class="row weeks">
			@foreach($week as $day)
				<div class="cal-cell {{ $day['class'] }}" >{{ $day['day'] }}</div>
			@endforeach
			
		</div>
		@endforeach
	</div>
</div>

@endsection