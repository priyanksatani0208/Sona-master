<?php
include_once('model.php');

class control extends model
{
	
	function __construct()
	{
		
		session_start();
		
		model:: __construct();
						
		$path=$_SERVER['PATH_INFO'];
		switch($path)
		{
			case '/index':
			if(isset($_REQUEST['submit']))
			{
				$admin_email=$_REQUEST['admin_email'];
				$admin_password=$_REQUEST['admin_password'];
								
				$where=array("admin_email"=>$admin_email,"admin_password"=>$admin_password);
				$run=$this->select_where('admin',$where);
				
				
				$res=$run->num_rows;
				if($res==1) // 1 means true
					{
						$data=$run->fetch_object();
						$_SESSION['email']=$data->admin_email;
						$_SESSION['name']=$data->admin_name;

						
						echo "<script> 
							alert('Login Success') 
							window.location='dashboard';
							</script>";
						
					}
					else
					{
						echo "<script> 
							alert('Login Failed due wrong credebntial') 
							window.location='index';
							</script>";
					}
			}
			include_once('index.php');
			break;
		
		
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			  case '/admin_logout':
		 	unset($_SESSION['email']);
				echo "<script> 
					alert('Logout Success'); 
					window.location='index';
					</script>";
			break;
			
			case '/add_rooms':
			//header profile name start
			$where=array("admin_email"=>$_SESSION['email']);
			$run=$this->select_where('admin',$where);
			$fetch=$run->fetch_object();	
			// header profile name end	
			/*$manage_servic_arr=$this->selectall('company');*/
			if(isset($_REQUEST['submit']))
			{
				$room_image=$_FILES['room_image']['name'];     // get only input type="file"
				$path='room_image/'.$room_image;
				
				$dup_file=$_FILES['room_image']['tmp_name'];   // duplicate file get	
				move_uploaded_file($dup_file,$path);
				
				$room_category=$_REQUEST['room_category'];
				$room_price=$_REQUEST['room_price'];
				$room_size=$_REQUEST['room_size'];
				$room_capacity=$_REQUEST['room_capacity'];
				$room_bed=$_REQUEST['room_bed'];
				$room_services=$_REQUEST['room_services'];	
				$room_details =$_REQUEST['room_details'];			
				
	
				$arr=array("room_image"=>$room_image,"room_category"=>$room_category,"room_price"=>$room_price,"room_size"=>$room_size,"room_capacity"=>$room_capacity,"room_bed"=>$room_bed,"room_services"=>$room_services,"room_details"=>$room_details);
	
				$res=$this->insert("rooms",$arr);
				if($res)
				{					
					echo "<script>alert('Add successfully....');
								  window.location='add_rooms';
						  </script>";								
				}
				else
				{
					echo "<script> alert('faill....') </script>";
				}
			}
			include_once('add_rooms.php');
			break;
			
			case '/view_contact':
			$manage_contact_arr=$this->selectall('contact');
			include_once('view_contact.php');
			break;
			
			case '/profile':
			$where=array("admin_email"=>$_SESSION['email']);
			$run=$this->select_where('admin',$where);
			$fetch=$run->fetch_object();
			include_once('profile.php');
			break;
			
			case '/manage_rooms':
			$manage_rooms_arr=$this->selectall('rooms');
			include_once('manage_rooms.php');
			break;

			case '/edit_rooms':
				if(isset($_REQUEST['edit_room_id']))
					{
						$room_id=$_REQUEST['edit_room_id'];
						$where=array("room_id"=>$room_id);
						$run=$this->select_where('rooms',$where);
						$fetch=$run->fetch_object();
						$old_file=$fetch->room_image;
						
						if(isset($_REQUEST['submit']))
						{
							$room_category=$_REQUEST['room_category'];
							$room_price=$_REQUEST['room_price'];
							$room_size=$_REQUEST['room_size'];
							$room_capacity=$_REQUEST['room_capacity'];
							$room_bed=$_REQUEST['room_bed'];	
							$room_services=$_REQUEST['room_services'];	
							$room_details=$_REQUEST['room_details'];							
							
							if($_FILES['room_image']['size']>0)
							{
								$room_image=$_FILES['room_image']['name'];  
								$path='room_image/'.$room_image;
								$dup_file=$_FILES['room_image']['tmp_name'];
								move_uploaded_file($dup_file,$path);
						
							
								$arr=array("room_category"=>$room_category,"room_price"=>$room_price,"room_size"=>$room_size,"room_capacity"=>$room_capacity,"room_bed"=>$room_bed,"room_services"=>$room_services,"room_details"=>$room_details,"room_image"=>$room_image);
								$res=$this->update('rooms',$arr,$where);
								if($res)
								{
									unlink('room_image/'.$old_file);
									echo "<script> 
									alert('Update Success'); 
									window.location='manage_rooms';
									</script>";
								}
							}	
							else
							{
								$arr=array("room_category"=>$room_category,"room_price"=>$room_price,"room_size"=>$room_size,"room_capacity"=>$room_capacity,"room_bed"=>$room_bed,"room_services"=>$room_services,"room_details"=>$room_details);
								$res=$this->update('rooms',$arr,$where);
								if($res)
								{
									echo "<script> 
									alert('Update Success'); 
									window.location='manage_rooms';
									</script>";
								}	
							}
						}
					}
					include('edit_rooms.php');
					break;
			
			case '/view_customer':
			$manage_customer_arr=$this->selectall('customer');
			include_once('view_customer.php');
			break;

			case '/view_booking':
			$manage_booking_arr=$this->select_where_join1('booking','customer','booking.cust_id=customer.cust_id','rooms','booking.room_id=rooms.room_id');
			include_once('view_booking.php');
			break;

			case '/view_feedback':
			$manage_feedback_arr=$this->select_where_join1('feedback','customer','feedback.cust_id=customer.cust_id','rooms','feedback.room_id=rooms.room_id');
			include_once('view_feedback.php');
			break;
			
			case '/delete':
			if(isset($_REQUEST['del_room_id']))
			{
				$room_id=$_REQUEST['del_room_id'];
				$where=array("room_id"=>$room_id);
				$res=$this->delete_where('rooms',$where);
				if($res) // 1 means true
				{
					echo "<script> 
						alert('Delete Success') 
						window.location='manage_rooms';
						</script>";
				}
			}
			break;

			case '/report':
				$category_name = $this->selectall('rooms');
				if(isset($_REQUEST['submit'])){
					$checkIn = $_POST['toDate'];
					$checkOut = $_POST['fromDate'];
					$category = $_POST['category'];
					$booking_report_arr=$this->booking_report($checkIn,$checkOut,$category);
				}
				include_once('report.php');
				break;
			
				case '/404':
				include_once('404.php');
				break;
		}
	}
}
$obj=new control;
?>