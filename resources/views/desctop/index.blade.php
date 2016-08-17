@extends('layouts.desctop')

@section('content')


<div class="row">

	<div class="col-md-3">
		<a href="#" class="btn btn-primary">
			@lang('invoice.add_invoice')
		</a>
		<ul class="list-group">
			<li class="list-group-item">
		    	<span class="badge">14</span>
		    			Cras justo odio
		  	</li>
		</ul>
	</div>
	




	<div class="col-md-9 ">

		<div ng-app="Calendar" class="month" >
			<div ng-controller="DaysController">
				<div class="row">
					<div class="col-xs-6 text-right lead">
						@{{ month_text }}
					</div>
					<div class="col-xs-6 lead">
						@{{ year }}
					</div>
				</div>
				<div class="row headings">
					<div class="cal-cell">Понедельник</div>
					<div class="cal-cell">Вторник</div>
					<div class="cal-cell">Среда</div>
					<div class="cal-cell">Четверг</div>
					<div class="cal-cell">Пятница</div>
					<div class="cal-cell">Суббота</div>
					<div class="cal-cell">Воскресенье</div>
				</div>
				<div >
					<div class="row weeks" ng-repeat="week in weeks">
						<div ng-repeat="day in week" class="cal-cell @{{ day.class }}" >@{{ day.day }}</div>
					</div>
					<div>
						<button class="btn btn-primary" ng-click="prevMonth()">@lang('calendar.prev_month')</button>
						<button class="btn btn-primary" ng-click="nextMonth()">@lang('calendar.next_month')</button>
					</div>
				</div>
			</div>
		</div>
		
		{{--
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
		--}}
	</div>
</div>

@endsection