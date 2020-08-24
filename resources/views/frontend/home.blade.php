@extends('frontendtemplate')
@section('content')

<!-- Main Body -->
	<div class="container my-3">
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="{{asset('frontend/images/c8.jpg')}}" class="d-block" width="1280" height="550" alt="...">
					<div class="carousel-caption d-none d-md-block">
						
					</div>
				</div>
				<div class="carousel-item">
					<img src="{{asset('frontend/images/c1.jpg')}}" class="d-block" width="1280" height="550" alt="...">
					<div class="carousel-caption d-none d-md-block">
						
					</div>
				</div>
				<div class="carousel-item">
					<img src="{{asset('frontend/images/c4.jpg')}}" class="d-block" width="1280" height="550" alt="...">
					<div class="carousel-caption d-none d-md-block">
						
					</div>
				</div>
			</div>
			<a class="carousel-control-prev btncolor" href="#carouselExampleCaptions" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next btncolor" href="#carouselExampleCaptions" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only ">Next</span>
			</a>
		</div>
	</div>
  <!-- Card -->
  <div class="container my-4">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12 my-3">
        <div class="card">
          <img src="images/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Book Ticket</a>
          </div>
        </div>

        
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 my-3">
        <div class="card">
          <img src="images/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Book Ticket</a>
          </div>
        </div>

        
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 my-3">
        <div class="card">
          <img src="images/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Book Ticket</a>
          </div>
        </div>

        
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 my-3">
        <div class="card">
          <img src="images/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Book Ticket</a>
          </div>
        </div>

        
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 my-3">
        <div class="card">
          <img src="images/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Book Ticket</a>
          </div>
        </div>

        
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 my-3">
        <div class="card">
          <img src="images/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Book Ticket</a>
          </div>
        </div>

        
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 my-3">
        <div class="card">
          <img src="images/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Book Ticket</a>
          </div>
        </div>

        
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 my-3">
        <div class="card">
          <img src="images/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Book Ticket</a>
          </div>
        </div>

        
      </div>
      
    </div>
    
  </div>

@endsection

{{-- @section('script')
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>


@endsection --}}