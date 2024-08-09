<?php
include_once('header.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
function getmodel(str)
{
	if(window.XMLHttpRequest)
	{
		xmlhttp= new XMLHttpRequest();	
	}
	else
	{
		xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");	
	}
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("mod_id").innerHTML=xmlhttp.responseText;	
		}
	}
xmlhttp.open("post","modeldata?btn=" + str,true);
xmlhttp.send();
}
</script>

 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Add Room's</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
        <form  method="post" enctype="multipart/form-data" name="myform" onsubmit="return validate()" >
		
		<div class="col-md-12 form-group1">
              <label class="control-label">Rooms image</label>
              <input type="file" placeholder="Services image" required="" name="room_image">
            </div>
            <div class="clearfix"> </div><br>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Rooms Type</label>
              <input type="text" placeholder="Service  Name" required="" name="room_category">
            </div>
            <div class="clearfix"> </div><br>

			<div class="col-md-12 form-group1">
              <label class="control-label">Rooms Price</label>
              <input type="text" placeholder="Service Price Name" required="" name="room_price">
            </div>
			<div class="clearfix"> </div><br>

			<div class="col-md-12 form-group1">
              <label class="control-label">Rooms Size</label>
              <input type="text" placeholder="Service description" required="" name="room_size">
            </div>
            <div class="clearfix"> </div><br>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Room capacity</label>
              <input type="text" placeholder="Service description" required="" name="room_capacity">
            </div>
            <div class="clearfix"> </div><br>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Room Bed	</label>
              <input type="text" placeholder="Service description" required="" name="room_bed">
            </div>
            <div class="clearfix"> </div><br>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Room Services</label>
              <input type="text" placeholder="Service description" required="" name="room_services">
            </div>
            <div class="clearfix"> </div><br>	

			<div class="col-md-12 form-group1">
              <label class="control-label">Room Details</label>
              <input type="text" placeholder="Service description" required="" name="room_details">
            </div>
            <div class="clearfix"> </div><br>	


            

		
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    


</div>
<?php
include_once('footer.php');
?>
