@extends('layouts.master')

@section('schedule')
	<div class="dhx_cal_container panel" id="scheduler_here">
		<div class="dhx_cal_navline">
			<div class="dhx_cal_prev_button">&nbsp;</div>
			<div class="dhx_cal_next_button">&nbsp;</div>
			<div class="dhx_cal_today_button"></div>
			<div class="dhx_cal_date"></div>

			<div class="dhx_cal_tab" name="day_tab"></div>
			<div class="dhx_cal_tab" name="week_tab"></div>
			<div class="dhx_cal_tab" name="month_tab"></div>
			<div class="dhx_cal_tab" name="year_tab"></div>
		</div>
		<div class="dhx_cal_header"></div>
		<div class="dhx_cal_data"></div>
	</div>
@stop