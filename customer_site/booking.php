<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style2.css" />


</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="booking-cta">
							<h1>Make your Hotel Booking</h1>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laboriosam numquam at
							</p>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1">
						<div class="booking-form">
							<form method="post" action="">
								<input class="form-control" name="roomId" value="<?php echo $_GET['roomId'] ?>"
									type="hidden">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" name="custname" value="<?php echo $_SESSION['cust_name'] ?>"
												disabled type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" name="email"
												value="<?php echo $_SESSION['email'] ?>" disabled type="email">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" name="phone"
												value="<?php echo $_SESSION['cust_mob'] ?>" disabled type="tel">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" placeholder="Room" title="Number Of Rooms"
												value="1" min="1" max="" type="number" name="rooms" id="numberOfRooms">
											<span class="select-arrow"></span>
										</div>
									</div>
									<!-- <div class="col-md-3 col-sm-6">
										<div class="form-group">
											<input class="form-control"  placeholder="Guests" min="1" max="4" type="number" name="guests"
												id="">
											<span class="select-arrow"></span>
										</div>
									</div> -->
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<!-- <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com" required>
											  <label for="floatingInput">Check In</label> -->
											<label for="checkIn">Check In</label>
											<input class="form-control" placeholder="Check In" id="checkIn"
												name="check_in" type="date" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="checkIn">Check Out</label>
											<input class="form-control" placeholder="Check Out" id="checkOut"
												name="check_out" type="date" required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="checkIn">Total Amount</label>
											<input class="form-control" id="totalAmount"
												value="<?php echo $roomPrice; ?>" placeholder="Total Amount"
												name="total_amount" type="number" disabled>
											<input class="form-control" id="totalAmountofRoom"
												value="<?php echo $roomPrice; ?>" type="hidden">
										</div>
									</div>
								</div>
								<div class="form-btn">
									<input type="submit" id="submit" name="submit" class="submit-btn" value="Book Now">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- <script src="js/jquerys.min.js"></script> -->
	<script src="./js/bootstrap.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>
	<script>
		document.addEventListener('DOMContentLoaded', function () {debugger;	
			// Get the date input elements
			var checkInInput = document.getElementById('checkIn');
			var checkOutInput = document.getElementById('checkOut');
			var numberOfRooms = document.getElementById("numberOfRooms");
			var totalAmount = document.getElementById("totalAmount");
			var roomPrice = document.getElementById("totalAmountofRoom");
			var submit = document.getElementById("submit");



			var today = new Date();
			today.setDate(today.getDate() + 1);
			var tomorrow = today.toISOString().split('T')[0];
			checkOutInput.disabled = true;
			if ("" !== checkInInput.value){	
				checkOutInput.disabled =false;
			}else {
				checkOutInput.disabled =true;
			}
			checkInInput.setAttribute('min', tomorrow);
			checkOutInput.setAttribute('min', tomorrow);
			// Add an event listener to checkIn to update the minimum value for checkOut
			checkInInput.addEventListener('input', function () {
				if (checkOutInput !== null) {
					checkOutInput.disabled = false;
					checkOutInput.setAttribute('min', checkInInput.value);
				}
			});

			// Add an event listener to checkOut to check if it's before checkIn
			if (checkOutInput !== null) {
				checkOutInput.addEventListener('input', function () {
					debugger;
					var checkInDate = new Date(checkInInput.value);
					var checkOutDate = new Date(checkOutInput.value);
					var timeDiff = Math.abs(checkOutDate.getTime() - checkInDate.getTime());
					var dayDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));

					totalAmount.value = roomPrice.value * numberOfRooms.value * dayDiff;
				});
			}


			numberOfRooms.addEventListener('change', function () {debugger;
				if ("" !== checkInInput.value && "" !== checkOutInput.value) {
					var checkInDate = new Date(checkInInput.value);
					var checkOutDate = new Date(checkOutInput.value);
					var timeDiff = Math.abs(checkOutDate.getTime() - checkInDate.getTime());
					var dayDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
					totalAmount.value = roomPrice.value * numberOfRooms.value * dayDiff;
				} else {
					totalAmount.value = roomPrice.value * numberOfRooms.value;
				}

			});

			submit.addEventListener('click' ,function(){
				totalAmount.disabled =false;
			});


		});
	</script>



</body>

</html>