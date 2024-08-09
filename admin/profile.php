<?php
if(isset($_SESSION['email']))
{
	
}


include_once('header.php');
?>
 
 	<!--banner-->	
		    <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Profile</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--gallery-->
 	 <div class=" profile">

		<div class="profile-bottom">
			<h3><i class="fa fa-user"></i>Profile</h3>
			<div class="profile-bottom-top">
			<div class="col-md-4 profile-bottom-img">
				<!-- <img src="images/.jpg" alt=""> -->
			</div>
			<div class="col-md-8 profile-text">
				<h6></h6>
				<table>
				
				<tr><td>Name </td>  
				<td> :</td>  
				<td><?php echo $fetch->admin_name;?></td></tr>
				
				<tr>
				<td>Email</td>
				<td> :</td>
				<td><?php echo $fetch->admin_email;?></td>
				</tr>
				
				</table>
			</div>
			<div class="clearfix"></div>
			</div>

			<div class="profile-btn">

                <!-- <button type="button" href="" class="btn bg-red">Save changes</button> -->
           <div class="clearfix"></div>
			</div>
			 
			
		</div>
	</div>
	<!--//gallery-->
<?php
include_once('footer.php');
?>



