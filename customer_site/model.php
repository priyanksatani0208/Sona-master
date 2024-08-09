<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class model
{
	public $conn="";
	function __construct()
	{
		$this->conn=new mysqli('localhost','root','','hbs');
	}
	function insert($tbl,$arr)
	{
		$key_arr=array_keys($arr);
		$key=implode(",",$key_arr);
		$value_arr=array_values($arr);
		$value=implode("','",$value_arr);
		$ins="insert into $tbl($key) values('$value')";
		// exit($ins);
		$run=$this->conn->query($ins);
		return $run;
	}
	
	function selectall($tbl)
	{
		$ins="select * from $tbl ";
		$run=$this->conn->query($ins);
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		if (!empty ($arr))
		{
			return $arr;
		}
		else
		{
			return $arr=array("Data Not Found");
		}
	}
	
	function select_where($tbl,$where)
	{
		$key_arr=array_keys($where); 
		$value_arr=array_values($where);
		
		$sel="select * from $tbl where 1=1"; // query continue
		$i=0;
		foreach($where as $w)
		{
			$sel.=" and $key_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);
		return $run;
		
	}

	function getById($tbl,$colName,$id)
	{		
		$sel="select * from $tbl where $colName=$id"; // query continue
		$run=$this->conn->query($sel);
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		if (!empty ($arr))
		{
			return $arr;
		}
		else
		{
			return $arr=array("Data Not Found");
		}
		// exit($sel);
		return $run;
	}

	function select_where_fetch($tbl,$where)
	{
		$key_arr=array_keys($where); 
		$value_arr=array_values($where);
		
		$sel="select * from $tbl where 1=1"; // query continue
		$i=0;
		foreach($where as $w)
		{
			$sel.=" and $key_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		// exit($sel);
		$run=$this->conn->query($sel);
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		if (!empty ($arr))
		{
			return $arr;
		}
		
	}


	function delete_where($tbl,$where)
	{
		$key_arr=array_keys($where); // 
		$value_arr=array_values($where);
		
		$del="delete from $tbl where 1=1"; // query continue
		$i=0;
		foreach($where as $w)
		{
			$del.=" and $key_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($del);
		return $run;
		
	}
	function update($tbl,$arr,$where)
	{
		$key_arr=array_keys($arr);
		$value_arr=array_values($arr);
		
		$upd="update $tbl set ";
		$i=0;
		$count=count($arr);
		foreach($arr as $w)
		{
			if($count==$i+1)
			{
				$upd.=" $key_arr[$i]='$value_arr[$i]'";
			}
			else
			{
				$upd.=" $key_arr[$i]='$value_arr[$i]',";
				$i++;
			}
		}
		$wkey_arr=array_keys($where);
		$wvalue_arr=array_values($where);
		$upd.="where 1=1";
		$j=0;
		foreach($where as $w)
		{
	        $upd.=" and $wkey_arr[$j]='$wvalue_arr[$j]'";
			$j++;
		}
		// exit($upd);
		$run=$this->conn->query($upd);
		return $run;
	}

	function get_cart($tbl1,$tbl2,$where)
	{
				
		$key_arr=array_keys($where); 
		$value_arr=array_values($where);
		
		$sel="select * FROM $tbl1 s RIGHT JOIN $tbl2 a ON s.service_id= a.service_id where 1=1"; // query continue
		$i=0;
		foreach($where as $w)
		{
			$sel.=" and $key_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		if (!empty ($arr))
		{
			return $arr;
		}

	}

	function feedback($roomId)
	{
		$ins = "select * from feedback f 
		left join customer c on c.cust_id = f.cust_id 
		where f.room_id = $roomId";
		$run = $this->conn->query($ins);
		while ($fetch = $run->fetch_object()) {
			$arr[] = $fetch;
		}
		if (!empty($arr)) {
			return $arr;
		} else {
			return $arr = array("Data not found");
		}
	}
	function feedbackRatting($roomId)
	{
		$ins = "SELECT AVG(f.feed_rating) AS average_value
		FROM feedback f where f.room_id = $roomId";
		$run = $this->conn->query($ins);
		while ($fetch = $run->fetch_object()) {
			$arr[] = $fetch;
		}
		if (!empty($arr)) {
			return $arr;
		} else {
			return $arr = array("Data not found");
		}
	}

	function send_mail($email, $message, $subject)
    {

        require_once('./PHPMailer/src/Exception.php');
        require_once('./PHPMailer/src/PHPMailer.php');
        require_once('./PHPMailer/src/SMTP.php');
        $mail = new PHPMailer();

        // $mail->Username = "kantibhuva@kantibhuva.com";
        // $mail->Password = "S@m@y2402";
        // $mail->SetFrom('mihirbhuva02@gmail.com', 'Mihir Bhuva');
        // $mail->AddReplyTo('mihirbhuva02@gmail.com', 'Mihir Bhuva');
        // $mail->AddBCC('kantibhuva@ymail.com', 'Kanti Bhuva');
        // $mail->MsgHTML($message);
        try {
            //Server settings
            // $mail->SMTPDebug = 3;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = "priyanksatani0208@gmail.com";
            $mail->Password = "fwru zxzv rqvn ecym";
            //$mail->SMTPSecure = 'tls';        
            $mail->Port = 587;

            //Recipients
            $mail->addAddress($email);
            $mail->SetFrom('priyanksatani0208@gmail.com', 'Priyank Satani');
            // $mail->AddReplyTo('mihirbhuva02@gmail.com', 'Mihir Bhuva');
            $mail->AddBCC('divyarathod2292002@gmail.com', 'Divya Rathod');
            // $mail->AddBCC('mihirbhuva02@gmail.com', 'Mihir Bhuva');
            // Content
            $mail->isHTML(true);
            // Set email format to HTML
            $mail->Subject = $subject;
            $mail->msgHTML($message);
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if ($mail->Send()) {
                $result = 1;
            } else {
                $result = "Error: " . $mail->ErrorInfo;
            }
        } catch (phpmailerException $e) {
            $result = $e->errorMessage();
            // exit;
        } catch (Exception $e) {
            $result = $e->getMessage();
            // exit;
        }

        $today = date("Y-m-d H:i:s");
        $myfile = fopen("output.txt", "a+") or die("Unable to open file!");

        $output = "[" . $today . "] " . $result . "\n";

        fwrite($myfile, $output);
        fclose($myfile);
        // exit;
    }

	function generateUUID() {
		return sprintf(
			'%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
			mt_rand(0, 0xffff),
			mt_rand(0, 0xffff),
			mt_rand(0, 0xffff),
			mt_rand(0, 0x0fff) | 0x4000,
			mt_rand(0, 0x3fff) | 0x8000,
			mt_rand(0, 0xffff),
			mt_rand(0, 0xffff),
			mt_rand(0, 0xffff)
		);
	}
	
}
$obj=new model();
?>