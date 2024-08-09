<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>View Contact</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>View Contact</h2>
            <div class="table-responsive">
				  <table class="table">
					<thead>
					
					  <tr>
						<th>Contact Id</th>
						<th>Name</th>
						<th>Email</th>
						<th>Message</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_contact_arr as $c)
					{
					?>
					  <tr>
						<td><?php echo $c-> cont_id;?></td>
						<td><?php echo $c-> cont_name;?></td>
						<td><?php echo $c-> cont_mob;?></td>
						<td><?php echo $c-> cont_message;?></td>
					  </tr>
					<?php
					}
					?>
					  
					</tbody>
				  </table>
				</div>
			</div>
	        </div>
	</div>
	
	<!--//faq-->
	<?php
include_once('footer.php');
?>
