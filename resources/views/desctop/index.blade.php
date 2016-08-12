@extends('layouts.desctop')

@section('content')


<div class="row">
	<div class="col-md-3">
		
	</div>
	




	<div class="col-md-9 ">

		<div ng-app="Calendar" class="month">
			<div class="row headings">
				<div class="cal-cell">Пон</div>
				<div class="cal-cell">Втор</div>
				<div class="cal-cell">Среда</div>
				<div class="cal-cell">Четверг</div>
				<div class="cal-cell">Пятница</div>
				<div class="cal-cell">Суббота</div>
				<div class="cal-cell">Воскресенье</div>
			</div>
			<div ng-controller="DaysController" >
				<div class="row weeks" ng-repeat="week in weeks">
					<div ng-repeat="day in week" class="cal-cell @{{ day.class }}" >@{{ day.day }}</div>
				</div>
				<div>
					<button class="btn btn-primary" ng-click="nextMonth()">Next.month</button>
				</div>
			</div>
		</div>

		<div class="month">
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
</div>

@endsection