<?php
namespace App\Calendar;

use Carbon\Carbon;

class Month
{
	protected $end_day;
	protected $start_day;
	protected $month;

	protected $weeks;


	function __construct(Carbon $month)
	{
		//->dayOfWeek
		$start_day = $month->copy()->startOfMonth();
		$start_day->subDays($start_day->dayOfWeek-1);

		$end_day = $month->copy()->endOfMonth();
		$end_day->addDays(7-$end_day->dayOfWeek);

		$this->month = $month;
		$this->end_day = $end_day;
		$this->start_day = $start_day;

		$this->generateWeeks();
	}

	private function generateWeeks(){
		$iteration = $this->start_day->copy();

		$week = array();
		$count = 0;
		while ($iteration->timestamp < $this->end_day->timestamp) {
			$count++;
			$week_item = array('day'=>$iteration->day,"class"=>"");

			if ($iteration->month != $this->month->month) {
				$week_item['class'].=" gray";
			}

			$week[] = $week_item;
			//echo $iteration."<br>";
			$iteration->addDay();
			if($count%7===0){
				$this->weeks[] = $week;
				$week = array();
			}
		}
	}

	public function getDays(){
		return $this->weeks;
	}

	public function getMonthText(){
		return $this->month->formatLocalized('%B');
	}	
	
	public function getYearhText(){
		return $this->month->formatLocalized('%Y');
	}

	public function render(){
		
	}


}

?>