@extends('frontendtemplate')
@section('content')

<div class="container my-5">
	<h2 class="pay my-5 mb-5">Choose Bank For Your Payment</h2>

	<div class="row">
		<div class="col-md-4">
			<div class="card text-center cardstyle1" style="width: 18rem;background-color: #C5E1A5">
				<div class="card-body">
					<h5 class="card-title">Payment</h5>
					<p class="card-text">KBZ</p>
					<a href="#" class="btn btn-primary" data-target="#detailModal" data-toggle="modal">Pay</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card text-center cardstyle2" style="width: 18rem;background-color: #99E0E3;">
				<div class="card-body">
					<h5 class="card-title">Payment</h5>
					<p class="card-text">KBZ PAY</p>
					<a href="#" class="btn btn-primary" data-target="#detailModal1" data-toggle="modal">Pay</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card text-center cardstyle3" style="width: 18rem;background-color: #c2c2a3;">
				<div class="card-body">
					<h5 class="card-title">Payment</h5>
					<p class="card-text">AYA</p>
					<a href="#" class="btn btn-primary" data-target="#detailModal2" data-toggle="modal">Pay</a>
				</div>
			</div>
		</div>
		<div class="col-md-4 my-3">
			<div class="card text-center cardstyle4" style="width: 18rem;background-color: #99E0E3;">
				<div class="card-body">
					<h5 class="card-title">Payment</h5>
					<p class="card-text">CB</p>
					<a href="#" class="btn btn-primary" data-target="#detailModal3" data-toggle="modal">Pay</a>
				</div>
			</div>
		</div>
		<div class="col-md-4 my-3">
			<div class="card text-center cardstyle5" style="width: 18rem;background-color: #99E0E3;">
				<div class="card-body">
					<h5 class="card-title">Payment</h5>
					<p class="card-text">YOMA</p>
					<a href="#" class="btn btn-primary" data-target="#detailModal4" data-toggle="modal">Pay</a>
				</div>
			</div>
		</div>
		<div class="col-md-4 my-3">
			<div class="card text-center cardstyle6" style="width: 18rem; background-color: #99E0E3;">
				<div class="card-body">
					<h5 class="card-title">Payment</h5>
					<p class="card-text">WAVE MONEY</p>
					<a href="#" class="btn btn-primary" data-target="#detailModal5" data-toggle="modal">Pay</a>
				</div>
			</div>
		</div>
	</div>

</div>

<!-- detail Modal -->
<div class="modal fade" id="detailModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Payment Detail</h3>
				<button class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<img src="{{asset('frontend/images/kbz2.jpg')}}" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="col-md-6">
							<form>
								<div class="row">
									<div class="col-lg-12 form-group">
										<label>Bank Card No.</label>
										<input type="text" class="form-control" placeholder="Enter Your Bank Card No.">
									</div>
									<div class="col-lg-12 form-group">
										<label> Card Expire :</label>
										<input type="date" class="form-control" placeholder="YY.MM">
									</div>
									<div class="col-lg-12 form-group">
										<label>Card CVC code</label>
										<input type="text" class="form-control" placeholder="CVC code">
									</div>
									<div class="col-lg-12 form-group">
										<label>Card Holder Name </label>
										<input type="text" class="form-control" placeholder="Card Holder Name">
									</div>

								</div>
							</form>
						</div>
						<button class="btn btn-primary">Confirm
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>
</div>
<div class="modal fade" id="detailModal1">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Payment Detail</h3>
				<button class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<img src="{{asset('frontend/images/kbzp.png')}}" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="col-md-6">
							<form>
								<div class="row">
									<div class="col-lg-12 form-group">
										<label>Bank Card No.</label>
										<input type="text" class="form-control" placeholder="Enter Your Bank Card No.">
									</div>
									<div class="col-lg-12 form-group">
										<label> Card Expire :</label>
										<input type="date" class="form-control" placeholder="YY.MM">
									</div>
									<div class="col-lg-12 form-group">
										<label>Card CVC code</label>
										<input type="text" class="form-control" placeholder="CVC code">
									</div>
									<div class="col-lg-12 form-group">
										<label>Card Holder Name </label>
										<input type="text" class="form-control" placeholder="Card Holder Name">
									</div>

								</div>
							</form>
						</div>
						<button class="btn btn-primary">Confirm
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>
<div class="modal fade" id="detailModal2">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Payment Detail</h3>
				<button class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<img src="{{asset('frontend/images/aya2.png')}}" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="col-md-6">
							<form>
								<div class="row">
									<div class="col-lg-12 form-group">
										<label>Bank Card No.</label>
										<input type="text" class="form-control" placeholder="Enter Your Bank Card No.">
									</div>
									<div class="col-lg-12 form-group">
										<label> Card Expire :</label>
										<input type="date" class="form-control" placeholder="YY.MM">
									</div>
									<div class="col-lg-12 form-group">
										<label>Card CVC code</label>
										<input type="text" class="form-control" placeholder="CVC code">
									</div>
									<div class="col-lg-12 form-group">
										<label>Card Holder Name </label>
										<input type="text" class="form-control" placeholder="Card Holder Name">
									</div>

								</div>
							</form>
						</div>
						<button class="btn btn-primary">Confirm
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>
<div class="modal fade" id="detailModal3">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Payment Detail</h3>
				<button class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<img src="{{asset('frontend/images/cb1.png')}}" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="col-md-6">
							<form>
								<div class="row">
									<div class="col-lg-12 form-group">
										<label>Bank Card No.</label>
										<input type="text" class="form-control" placeholder="Enter Your Bank Card No.">
									</div>
									<div class="col-lg-12 form-group">
										<label> Card Expire :</label>
										<input type="date" class="form-control" placeholder="YY.MM">
									</div>
									<div class="col-lg-12 form-group">
										<label>Card CVC code</label>
										<input type="text" class="form-control" placeholder="CVC code">
									</div>
									<div class="col-lg-12 form-group">
										<label>Card Holder Name </label>
										<input type="text" class="form-control" placeholder="Card Holder Name">
									</div>

								</div>
							</form>
						</div>
						<button class="btn btn-primary">Confirm
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>
<div class="modal fade" id="detailModal4">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Payment Detail</h3>
				<button class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<img src="{{asset('frontend/images/yoma.png')}}" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="col-md-6">
							<form>
								<div class="row">
									<div class="col-lg-12 form-group">
										<label>Bank Card No.</label>
										<input type="text" class="form-control" placeholder="Enter Your Bank Card No.">
									</div>
									<div class="col-lg-12 form-group">
										<label> Card Expire :</label>
										<input type="date" class="form-control" placeholder="YY.MM">
									</div>
									<div class="col-lg-12 form-group">
										<label>Card CVC code</label>
										<input type="text" class="form-control" placeholder="CVC code">
									</div>
									<div class="col-lg-12 form-group">
										<label>Card Holder Name </label>
										<input type="text" class="form-control" placeholder="Card Holder Name">
									</div>

								</div>
							</form>
						</div>
						<button class="btn btn-primary">Confirm
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>
<div class="modal fade" id="detailModal5">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Payment Detail</h3>
				<button class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<img src="{{asset('frontend/images/wave.png')}}" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="col-md-6">
							<form>
								<div class="row">
									<div class="col-lg-12 form-group">
										<label>Bank Card No.</label>
										<input type="text" class="form-control" placeholder="Enter Your Bank Card No.">
									</div>
									<div class="col-lg-12 form-group">
										<label> Card Expire :</label>
										<input type="date" class="form-control" placeholder="YY.MM">
									</div>
									<div class="col-lg-12 form-group">
										<label>Card CVC code</label>
										<input type="text" class="form-control" placeholder="CVC code">
									</div>
									<div class="col-lg-12 form-group">
										<label>Card Holder Name </label>
										<input type="text" class="form-control" placeholder="Card Holder Name">
									</div>

								</div>
							</form>
						</div>
						<button class="btn btn-primary">Confirm
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>

@endsection