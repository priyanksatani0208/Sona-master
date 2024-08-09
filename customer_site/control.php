<?php
include_once('model.php');

class control extends model
{

	function __construct()
	{

		session_start();

		model::__construct();

		$path = $_SERVER['PATH_INFO'];
		switch ($path) {
			case '/index':
				$roomData = $this->selectall('rooms');
				include_once('index.php');
				break;

			case '/contact':
				if (isset($_REQUEST['submit'])) {
					$cont_name = $_REQUEST['cont_name'];
					$cont_mob = $_REQUEST['cont_mob'];
					$cont_message = $_REQUEST['cont_message'];


					$arr = array("cont_name" => $cont_name, "cont_mob" => $cont_mob, "cont_message" => $cont_message);

					$res = $this->insert('contact', $arr);
					if ($res) {
						echo "<script> alert('send contact') </script>";
					} else {
						echo "";
					}


				}
				include_once('contact.php');
				break;

			case '/services':
				include_once('services.php');
				break;

			case '/about-us':
				include_once('about-us.php');
				break;

			case '/rooms':
				$roomData = $this->selectall('rooms');
				include_once('rooms.php');
				break;

			case '/room':
				$roomId = $_GET['rooms-details'];
				$roomDetail = $this->getById('rooms', 'room_id', $roomId);
				$feedBackList = $this->feedback($roomId);
				$feedBackReting = $this->feedbackRatting($roomId);
				if (isset($_POST['feedBack'])) {
					$custId = $_SESSION['cust_id'];
					$rating = $_POST['rating'];
					$review = $_POST['review'];
					$arr = array(
						"feed_rating" => $rating,
						"feed_review" => $review,
						"cust_id" => $custId,
						"room_id" => $roomId
					);
					$res = $this->insert("feedback", $arr);
					if ($res) {
						echo "<script> alert('send feedback successfully....') </script>";
					} else {
						echo "";
					}
				}
				include_once('room-details.php');
				break;

			case '/forgot-password':
				if (isset($_POST['submit'])) {
					$cust_email = $_POST['cust_email'];
					$where = array("cust_email" => $cust_email);
					$run = $this->select_where('customer', $where);

					$res = $run->num_rows;   // check cond by rows

					if ($res == 1)           // 1 means true
					{
						$fetch = $run->fetch_object();
						// echo $fetch->cust_name;
						$custName = $fetch->cust_name;
						$custEmail = $fetch->cust_email;
						$custPass = $fetch->cust_password;
						echo "<script> 
						window.onload = function what(){
							var error = document.getElementById('error');
							error.innerHTML = 'Email send sucssess';
							error.style.color = \"green\";
							};
							</script>";

						// $message = "hello,</br> $custName  </br>
						//     your email = $custEmail and </br>
						// 	password = $custPass";

						$message = "hello, $custName  </br></br>
						<table border='1'>
						<tr>
							<th>Email :</td>
							<td>$custEmail</td>
						</tr>
						<tr>
							<th>Password :</td>
							<td>$custPass</td>
						</tr>
					</table><br><br>					
					<p>© 2023-2024 Hotels. All rights reserved | Designed by Divya savan priyank </p></div>";
						$this->send_mail($cust_email, $message, "Mini Project : Forgot Password  ");
					} else {
						echo "<script> 
						window.onload = function what(){
							var error = document.getElementById('error');
							error.innerHTML = 'Email not found';
							error.style.color = \"red\";
							};
							
						</script>";
					}
				}
				include_once('forgot_password.php');
				break;

			case '/signup':
				if (isset($_REQUEST['submit'])) {
					$cust_name = $_REQUEST['cust_name'];
					$cust_email = $_REQUEST['cust_email'];
					$cust_mob = $_REQUEST['cust_mob'];
					$cust_add = $_REQUEST['cust_add'];
					$cust_password = $_REQUEST['cust_password'];
					// $cust_password=md5($cust_password);	

					$confirm_password = $_REQUEST['confirm_password'];
					//	$confirm_password=md5($confirm_password);

					if ($cust_password == $confirm_password) {
						$arr = array("cust_name" => $cust_name, "cust_email" => $cust_email, "cust_mob" => $cust_mob, "cust_add" => $cust_add, "cust_password" => $cust_password);

						$res = $this->insert('customer', $arr);
						if ($res) {
							echo "<script> 
						alert('sucessfully Register...')
						window.location='login';
						</script>";
						}
					} else {
						echo "<script>alert('Password and conform password does not match..');</script>";
						echo "<script> window.location='signup';</script>";
					}
				}
				include_once('signup.php');
				break;

			case '/login':
				if (isset($_REQUEST['submit'])) {
					$cust_email = $_REQUEST['cust_email'];
					$cust_password = $_REQUEST['cust_password'];
					// $cust_password=md5($cust_password);	


					$where = array("cust_email" => $cust_email, "cust_password" => $cust_password);

					$run = $this->select_where('customer', $where);

					$res = $run->num_rows;   // check cond by rows

					if ($res == 1)           // 1 means true
					{
						$fetch = $run->fetch_object();
						$_SESSION['email'] = $fetch->cust_email;

						$_SESSION['cust_id'] = $fetch->cust_id;
						$_SESSION['cust_mob'] = $fetch->cust_mob;
						$_SESSION['cust_name'] = $fetch->cust_name;

						// $_SESSION['cust_add']=$fetch->address;

						echo "<script> 
										alert('Login Success') 
										window.location='index';
										</script>";
					} else {

						echo "<script>alert('Login Failed due wrong credebntial')</script>";
					}
				}
				include_once('login.php');
				break;

			case '/myprofile':
				$where = array("cust_email" => $_SESSION['email']);
				$run = $this->select_where('customer', $where);
				$fetch = $run->fetch_object();
				include_once('myprofile.php');
				break;

			case '/editmyprofile';
				if (isset($_REQUEST['edit_cust_id'])) {
					$cust_id = $_REQUEST['edit_cust_id'];
					$where = array("cust_id" => $cust_id);
					$run = $this->select_where('customer', $where);
					$fetch = $run->fetch_object();

					if (isset($_REQUEST['submit'])) {

						$cust_name = $_REQUEST['cust_name'];
						$cust_email = $_REQUEST['cust_email'];
						$cust_mob = $_REQUEST['cust_mob'];
						$cust_add = $_REQUEST['cust_add'];

						$arr = array("cust_name" => $cust_name, "cust_email" => $cust_email, "cust_mob" => $cust_mob, "cust_add" => $cust_add);
						$res = $this->update('customer', $arr, $where);
						if ($res) {
							echo "<script> 
						alert('Update Success'); 
						window.location='myprofile';
						</script>";
						}

					}

				}
				include_once('editmyprofile.php');
				break;

			case '/change_password':
				if (isset($_REQUEST['edit_cust_id'])) {
					$cust_id = $_REQUEST['edit_cust_id'];
					$where = array("cust_id" => $cust_id);
					$run = $this->select_where('customer', $where);

					if (isset($_REQUEST['submit'])) {

						$cust_password = $_REQUEST['cust_password'];
						$Confirm_Password = $_REQUEST['Confirm_Password'];

						if ($cust_password == $Confirm_Password) {

							$arr = array("cust_password" => $cust_password);
							$res = $this->update('customer', $arr, $where);
							if ($res) {
								echo "<script> 
							alert('Update password'); 
							window.location='myprofile';
							</script>";
							}
						}

					}
				}
				include_once('change_password.php');
				break;


			case '/logout':
				unset($_SESSION['email']);
				unset($_SESSION['cust_id']);
				unset($_SESSION['cust_mob']);
				unset($_SESSION['cust_name']);
				echo "<script> alert('Logout Success')
				window.location='index';
				</script>";
				break;

			case '/booking':
				$roomId = $_GET['roomId'];
				$roomDetail = $this->getById('rooms', "room_id", $roomId);
				// print_r($roomDetail);
				$roomPrice = null;
				foreach ($roomDetail as $v) {
					$roomPrice = $v->room_price;
				}

				if (isset($_POST['submit'])) {

					$room_id = $_POST['roomId'];
					$cust_id = $_SESSION['cust_id'];
					$check_in = $_POST['check_in'];
					$check_out = $_POST['check_out'];
					$total_amount = $_REQUEST['total_amount'];
					$rooms = $_POST['rooms'];
					$uuid = $this->generateUUID();

					$arr = array(
						"cust_id" => $cust_id,
						"booking_check_in" => $check_in,
						"booking_check_out" => $check_out,
						"booking_rooms" => $rooms,
						"room_id" => $room_id,
						"total_amount" => $total_amount,
						"uuid" => $uuid,
					);

					$res = $this->insert('booking', $arr);
					if ($res) {
						ob_start();
						include_once('conformBooking.php');
						$message = ob_get_clean();
						$subject = "Conform Your Booking";
						$this->send_mail($_SESSION['email'], $message, $subject);
						echo "<script> 
					alert(' Please Check yore email and confirm your booking. '); 
					window.location='index';
					</script>";
					}
				}
				include_once('booking.php');
				break;

			case '/conform-Booking':
				$uuid = $_GET['id'];
				$cust_detail = $this->select_where_fetch('booking', array("uuid" => $uuid));

				if (!empty($cust_detail)) {
					$stdObject = $cust_detail[0]; // Assuming you're interested in the first element
					$stdObject->booking_status = 0;
					$stdObject->uuid = null;

					// Update the booking status directly using the update function
					$cust_conform = $this->update("booking", (array) $stdObject, array("booking_id" => $stdObject->booking_id));
					if ($cust_conform) {
						include_once("thank.php");
					} else {
						include_once('404.php');
					}
					// Output or handle $cust_conform as needed
				}
				break;
			default:
				include_once('404.php');
		}
	}
}
$obj = new control;
?>