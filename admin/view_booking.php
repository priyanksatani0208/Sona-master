<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>View Booking</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>View Booking</h2>

				  <table class="table">
					<thead>
					  <tr>
                        <th>booking Id</th>
						<th>Customer Name</th>
						<th>Customer Mobile</th>
						<th>Customer Email</th>
						<th>Booking Rooms</th>
						<th>Booking Check In</th>
						<th>Booking Check Out</th>
						<th>Total Amount</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_booking_arr as $c)
					{
					?>
					  <tr>
                        <td><?php echo $c ->booking_id ;?></td>
						<td><?php echo $c ->cust_name ;?></td>
						<td><?php echo $c ->cust_mob ;?></td>
						<td><?php echo $c ->cust_email ;?></td>
						<td><?php echo $c ->booking_rooms;?></td>
						<td><?php echo $c ->booking_check_in ;?></td>
						<td><?php echo $c ->booking_check_out ;?></td>
						<td><?php echo $c ->total_amount;?></td>
					  </tr>
					<?php
					}
					?>
					</tbody>
				  </table>
				</div>
				
	        </div>
	</div>
	
	<!--//faq-->
	<?php
include_once('footer.php');
?>
