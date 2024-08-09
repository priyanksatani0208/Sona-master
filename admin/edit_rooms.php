<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Rooms</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form method="post" enctype="multipart/form-data">          

            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Upload Room img :</label>
              <input type="file" placeholder="Room Img" name="room_image"  value="<?php echo $fetch->room_image;?>"><br>
              <img src="room_image/<?php echo $fetch->room_image;?>" alt="service Img" width="50px">
            </div>

         	 <div class="col-md-12 form-group1">
              <label class="control-label">Room Category</label>
              <input type="text" placeholder="Room Category" required="" name="room_category" value="<?php echo $fetch->room_category;?>">
            </div>
            <div class="clearfix"> </div><br>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Room Price </label>
              <input type="text" placeholder="Room Price"  name="room_price" value="<?php echo $fetch->room_price; ?>">
            </div>
            <div class="clearfix"> </div><br>
			
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Room Size</label>
              <input type="text" placeholder="Room Size"  name="room_size" value="<?php echo $fetch->room_size;?>">
            </div>
             <div class="clearfix"> </div>
            
			      <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Room  Capacity</label>
              <input type="text" placeholder="Room Capacity" name="room_capacity" required="" value="<?php echo $fetch->room_capacity;?>">
            </div>
            <div class="clearfix"> </div><br>             
			
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Room Bed</label>
              <input type="text" placeholder="Room Bed"  name="room_bed" value="<?php echo $fetch->room_bed;?>">
            </div>
             <div class="clearfix"> </div>
             
             <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Room Services</label>
              <input type="text" placeholder="Room Services"  name="room_services" value="<?php echo $fetch->room_services;?>">
            </div>
             <div class="clearfix"> </div>
           
             <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Room Details</label>
              <input type="text" placeholder="Room Details"  name="room_details" value="<?php echo $fetch->room_details;?>">
            </div>
             <div class="clearfix"> </div>         
                                   
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>
<?php
include_once('footer.php');
?>
