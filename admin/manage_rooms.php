<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Room's</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage Room's</h2>

				  <table class="table">
					<thead>
					  <tr>
						<th>Room Id</th>
						<th>Room Image</th>
						<th>Room Type</th>
						<th>Room Category</th>
						<th>Room Price</th>
						<th>Room Size</th>
						<th>Room capacity</th>
						<th>Room Bed</th>
						<th>Room services</th>
						<th>Room Degtails</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_rooms_arr as $c)
					{
					?>
					
					  <tr>
						<td><?php echo $c ->room_id ;?></td>
						<td><img src="room_image/<?php echo $c ->room_image ;?>"width="50px" height="50px"/></td>		
						<td><?php echo $c ->room_image ;?></td>
						<td><?php echo $c ->room_category ;?></td>
						<td><?php echo $c ->room_price ;?></td>
						<td><?php echo $c ->room_size ;?></td>
						<td><?php echo $c ->room_capacity ;?></td>
						<td><?php echo $c ->room_bed ;?></td>
						<td><?php echo $c ->room_services ;?></td>
						<td><?php echo $c ->room_details;?></td>
						<td><a href="edit_rooms?edit_room_id=<?php echo $c->room_id?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_room_id=<?php echo $c->room_id ?>" class="btn btn-danger">Delete</a></td>
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
