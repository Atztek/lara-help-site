@extends('layouts.desctop')

@section('content')


<div class="row" ng-app="Calendar">

	<div class="col-md-3" ng-controller='MenyController'>
		<button class="btn btn-primary" ng-click='addInvoiceDialog()'>
			@lang('invoice.add_invoice')
		</button>
		@{{ invoice }}
	</div>

	<div class="col-md-9 ">

		<div  class="month" >
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
		
	</div>
</div>

@endsection