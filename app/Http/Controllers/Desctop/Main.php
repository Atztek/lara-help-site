<?php

namespace App\Http\Controllers\Desctop;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use \App\Calendar;

class Main extends Controller
{	
	public function __construct()
	{
	    $this->middleware('auth');
	}

    public function index(Request $request)
	{

		$month = new Calendar\Month(Carbon::now());
		//echo "<br>--------------<br>";
		//$month = new Calendar\Month(Carbon::now()->addMonth());


		//$now = ;
		//$start_day = $now->startOfMonth()->dayOfWeek;
		//$count_days = $now->endOfMonth()->dayOfWeek;

		//$month

		//$monthStart = $now->startOfMonth();
		//echo $monthStart->dayOfWeek();
		//$monthEnd = $now->endOfMonth();
		//$dtToronto = Carbon::createFromDate(2012, 1, 1, 'America/Toronto');

		return view('desctop.index',[
			'month'=>$month->getDays()
		]);
	}
}
