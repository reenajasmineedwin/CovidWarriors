<?php 
session_start(); 
include "db_conn.php";
$hospitalid=$_SESSION['hid'];

if (isset($_POST['o2']) && isset($_POST['remdesivir'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

   
    $o2 = validate($_POST['o2']);
    $remdesivir= validate($_POST['remdesivir']);


	if(empty($o2)){
        header("Location: hospregis.html?error=Availabe O2 cylinders is required");
	    exit();
	}else if(empty($remdesivir)){
        header("Location: hospregis.html?error=Availabe remdesivir injections is required");
	    exit();
	}
	else {

        
$sql ="UPDATE HOSPITAL SET Qt_O2='$o2' , Qt_Remdesivir='$remdesivir' WHERE Hosp_id='$hospitalid'";
        
		$result = mysqli_query($conn, $sql);

		if ($result) {
				header("Location: hospsign-inB.html?error=Updated successfully");
		        exit();
			}
		else{
			header("Location: hospsign-inB.html?error=ERROR!!");
	        exit();
		}
	}
	
}else{
	header("Location: hospsign-inB.html");
	exit();
}