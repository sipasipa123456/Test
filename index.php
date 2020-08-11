<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="themify-icons/themify-icons.css">

    <title>Test</title>
    <style type="text/css">
    	.color-grey {
    		color: #D5DEE6;
    	}
    	.color-dark-blue {
    		color: : #2B4150 !important;
    	}
    	/* The container */
		.container {
		  display: block;
		  position: relative;
		  padding-left: 35px;
		  margin-bottom: 12px;
		  cursor: pointer;
		  font-size: 22px;
		  -webkit-user-select: none;
		  -moz-user-select: none;
		  -ms-user-select: none;
		  user-select: none;
		  
		}

		/* Hide the browser's default checkbox */
		.container input {
		  position: absolute;
		  opacity: 0;
		  cursor: pointer;
		  height: 0;
		  width: 0;
		}

		/* Create a custom checkbox */
		.checkmark {
		  position: absolute;
		  top: 0;
		  left: 0;
		  height: 25px;
		  width: 25px;
		  border-radius: 25px;
		  background-color: #eee;
		}

		/* On mouse-over, add a grey background color */
		.container:hover input ~ .checkmark {
		  background-color: #2C4251;
		}

		/* When the checkbox is checked, add a blue background */
		.container input:checked ~ .checkmark {
		  background-color: #D5DEE6;
		}

		/* Create the checkmark/indicator (hidden when not checked) */
		.checkmark:after {
		  content: "";
		  position: absolute;
		  display: none;
		  
		}

		/* Show the checkmark when checked */
		.container input:checked ~ .checkmark:after {
		  display: block;
		  
		}

		/* Style the checkmark/indicator */
		.container .checkmark:after {
		  left: 9px;
		  top: 5px;
		  width: 5px;
		  height: 10px;
		  border: solid white;
		  border-width: 0 3px 3px 0;
		  -webkit-transform: rotate(45deg);
		  -ms-transform: rotate(45deg);
		  transform: rotate(45deg);
		}
		.color-grey-two {
			color: #B0B6C1;
		}
		.color-grey-two-bold {
			color: #B0B6C1;
			font-weight: bold;
		}
		.img-style {
			width: 20px;
			margin-top: -10px;
		}
		.location {
			font-size: 17px; 
			color:#B0B6C1;
		}
		.location2 {
			color:#B0B6C1; 
			font-size: 30px;
		}
		.date-start{
			color:grey;
			font-size: 17px;
		}
		.date-start-3{
			color:grey;
			font-size: 11px;
			padding-bottom: 10px
		}
		.date-start-2{
			font-size: 17px; font-weight: bold;
		}
		.img-package {
			border-radius: 10%;
			width: 30%;
		}

    </style>
  </head>
  <body>
  	<div class="pr-3 pl-3">
  		<div class="col-sm-12">
  			<div class="row">
  				<div class="col-sm-4 m-0 p-0">
		  			<div class="card m-0 p-0" >
						<div class="card-body">
							<div class="row">
								<div class="col-sm-10">
									<table>
										<tr>
											<td><h6 class="color-grey-two">STEP 1</h6></td>
										</tr>
										<tr>
											<td><h5 class="color-dark-blue">Select room</h5></td>
										</tr>
									</table>
								</div>
								<div class="col-sm-2 mt-3">
									<label class="container float-right">
									  <input type="checkbox" checked="checked">
									  <span class="checkmark"></span>
									</label>
								</div>
							</div>
							
						</div>
					</div>
		  		</div>
		  		<div class="col-sm-4 m-0 p-0">
		  			<div class="card m-0 p-0" >
						<div class="card-body">
							<div class="row">
								<div class="col-sm-10">
									<table>
										<tr>
											<td><h6 class="color-grey-two">STEP 2</h6></td>
										</tr>
										<tr>
											<td><h5 class="color-dark-blue">Enter your information</h5></td>
										</tr>
									</table>
								</div>
								<div class="col-sm-2 mt-3">
									<label class="container float-right">
									  <input type="checkbox" checked="checked">
									  <span class="checkmark"></span>
									</label>
								</div>
							</div>
							
						</div>
					</div>
		  		</div>
		  		<div class="col-sm-4 m-0 p-0">
		  			<div class="card m-0 p-0" >
						<div class="card-body">
							<div class="row">
								<div class="col-sm-10">
									<table>
										<tr>
											<td><h6 class="color-grey-two">STEP 3</h6></td>
										</tr>
										<tr>
											<td><h5 class="color-dark-blue">Booking confirmation</h5></td>
										</tr>
									</table>
								</div>
								<div class="col-sm-2 mt-3">
									<label class="container float-right">
									  <input type="checkbox" checked="checked">
									  <span class="checkmark"></span>
									</label>
								</div>
							</div>
							
						</div>
					</div>
		  		</div>
  			</div>
	  	</div>
	  	<div class="mt-5">
	  		<div class="row">
	  			<div class="col-sm-12">
	  				<div class="card bg-white" >
						<div class="card-body">
						    <h3 class="card-title color-dark-blue"  >Blue Corner Dive Resort  <?php for($i=0;$i<=3;$i++) {
						    ?> <img src="img/star.png" class="img-style" > <?php } ?> 
						    <div class="card-text">
					    		<span class="ti-location-pin location" >
					    		Jalan Raya, Jungutbatu, Nusa Lembongan Island, Bali 80771, Indonesia</span>   	
						    </div> 
						    <div class="pt-4 pb-4">
						    	<div class="card bg-light m-0 p-0" >
									<div class="card-body">
										<div class="row">
											<div class="col-sm-3">
												<table>
													<tr >
														<td rowspan="2"><span class="ti-calendar location2" ></span>&nbsp&nbsp&nbsp</td>
														<td class="date-start">Date Start</td>
														
													</tr>
													<tr >
														<td class="date-start-2" >14 June 2020</td>
													</tr>
												</table>
											</div>
											<div class="col-sm-3">
												<table>
													<tr >
														<td rowspan="2"><span class="ti-calendar location2" ></span>&nbsp&nbsp&nbsp</td>
														<td class="date-start">Date End</td>
														
													</tr>
													<tr >
														<td class="date-start-2" >21 June 2020</td>
													</tr>
												</table>
											</div>
											<div class="col-sm-3">
												<table>
													<tr >
														<td rowspan="2"><span class="ti-calendar location2" ></span>&nbsp&nbsp&nbsp</td>
														<td class="date-start">Duration</td>
														
													</tr>
													<tr >
														<td class="date-start-2" >7 Night</td>
													</tr>
												</table>
											</div>
											<div class="col-sm-3">
												<table>
													<tr >
														<td rowspan="2"><span class="ti-calendar location2" ></span>&nbsp&nbsp&nbsp</td>
														<td class="date-start">Guest</td>
														
													</tr>
													<tr >
														<td class="date-start-2" >2 Guests</td>
													</tr>
												</table>
											</div>
											
										</div>
									</div>
								</div>
						    </div>

						    <div class="row">
						    	<div class="col-sm-4">
						    		<p style="font-size: 17px; font-weight: bold">Packages</p>
						    	</div>
						    	<div class="col-sm-12">
						    		<div class="row">
						    			<div class="col-sm-3 date-start-3">Selected Package</div>
						    			<div class="col-sm-3 date-start-3">Price</div>
						    			<div class="col-sm-3 date-start-3">Quantity</div>
						    			<div class="col-sm-3 date-start-3">Total Price</div>
						    		</div>
						    		<ul class="list-group">
									  <li class="list-group-item ">
									  	<div class="row">
							    			<div class="col-sm-3 date-start-3 ">
							    				<img src="img/img.png" class="img-package"> 
							    				Double - Bedroom Pool Villa
							    				
							    			</div>
							    			<div class="col-sm-3 date-start-3">IDR 3.050.00</div>
							    			<div class="col-sm-3 date-start-3">7</div>
							    			<div class="col-sm-3 date-start-3">IDR 21.135.000</div>
							    		</div>
									  </li>
									  <li class="list-group-item">
									  	<div class="row">
							    			<div class="col-sm-3 date-start-3 ">
							    				<center><h6>Tax</h6></center>
							    				
							    			</div>
							    			<div class="col-sm-6 date-start-3"><center><h6>10%</h6></center></div>
							    			<div class="col-sm-3 date-start-3"><h6>IDR 21.135.000</h6></div>
							    		</div>
									  	
									  </li>
									  <li class="list-group-item " style="background-color: #E4F5FC;">
									  	<div class="row">
							    			<div class="col-sm-3 ">
							    				<h6 class="color-grey-two-bold">Total room price</h6>
							    				<p class="color-grey-two" style="font-size: 11pt">For 2 Guest in room</p>
							    				
							    			</div>
							    			
							    			<div class="col-sm-3 float-right"><h6>IDR 21.135.000</h6></div>
							    		</div>
									  </li>
									</ul>
						    	</div>
						    </div>
						    <div class="pt-4 pb-4">
						    	
						    		<p style="font-size: 17px; font-weight: bold">Personal Information</p>
										<div class="row">
											<?php
											for($i=0;$i<=2;$i++) 
											{
												?>
											
											<div class="col-sm-4">
												<table>
													<tr >
														<td style="color:grey; font-size: 17px;">Date Start</td>
														
													</tr>
													<tr >
														<td style="font-size: 17px; font-weight: bold">14 June 2020</td>
													</tr>
												</table>
											</div>
											<?php
											}
											?>
											
										</div>
									
						    </div>
						    <div class="pt-4">
					    		<p style="font-size: 17px; font-weight: bold">Next Step</p>
					    	
									<ul>
										<li class="color-grey-two" style="font-size: 11pt">Lorem ipsum sit amet.</li>
										<li class="color-grey-two" style="font-size: 11pt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</li>
										<li class="color-grey-two" style="font-size: 11pt">Tempor incididunt ut labore et dolore magna aliqua..</li>
									</ul>	
						    </div>
						</div>
						<div class=" pb-4">
						    	<div class="col-sm-12">
						    		<form action="/action_page.php">
								  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
								  <label for="vehicle1" class="color-grey-two" style="font-size: 11pt"> I have a bike</label><br>
								  
								</form>
						    		<button type="button" class="btn btn-info p-3" style="width: 100%">Request to Book</button>
						    	</div>
						    	
						    </div>
					</div>
	  				
	  			</div>
	  			
	  		</div>
		</div>
  	</div>

  	
   	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>