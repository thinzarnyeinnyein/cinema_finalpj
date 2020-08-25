@extends('frontendtemplate')
@section('content')

<div class="container float-left my-3 ml-5">
	<div class="row">
		<div class="col-md-3">
			<form action="index.html" method="get" name="form1" id="form1">
				<input type="date" name="date1" class="dateone" min="24/08/2020">


			</form>

		</div>
		<div class="col-md-3">
			<label style="text-align: left;">Choose Theater</label>
			<select name="hall" id="hall">
				<option value="hall1" data-name="hall1">Hall One</option>
				<option value="hall2" data-name="hall2">Hall Two</option>
			</select>

		</div>
		<div class="col-md-3">
			<label style="text-align: left;">Movie Times</label>
			<select name="time" id="time">
				<option value="time1" data-name="9:30AM">9:30AM</option>
				<option value="time2" data-name="12:30PM">12:30PM</option>
				<option value="time3" data-name="3:30PM">3:30PM</option>
				<option value="time4" data-name="6:00PM">6:00PM</option>
			</select>


		</div>
		<div class="col-md-3">
			<label style="text-align: left;">Movies</label>
			<select name="movie" id="movie">
				<option value="movie1" data-name="The King">The King</option>
				<option value="movie2" data-name="Lion">Lion</option>
				<option value="movie3" data-name="End Game">End Game</option>
				<option value="movie4" data-name="Bananas">The Nan</option>
			</select>

			<input type="submit" name="submit" data-date="date1" data-hall="hall" data-time="time" data-movie="movie" class="submit">
		</div>


	</div>

</div>


<div class="container my-5">
	<form id="myform" style="height: auto;">
		<input type="hidden" name="totSeat" id="totSeat">
		<input type="hidden" name="totPrice" value="0" id="totPrice">
		<!-- <h1>Select Seat</h1> -->
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<div class="container my-3">
			<div class="row">
				<button class="screen">Screen</button>

			</div>

		</div>

		<div class="container myseat my-5">

			

		</div>
		
	</form>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{asset('frontend/js/seat.js')}}"></script>
@endsection

@section('seat')

@endsection

