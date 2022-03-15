<?php 
session_start(); 
include "db_conn.php";


if (isset($_POST['uname']) && isset($_POST['anum']) && isset($_POST['pnum']) && isset($_POST['upassword'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}


    $uname = validate($_POST['uname']);
	$anum = validate($_POST['anum']);
    $pnum = validate($_POST['pnum']);
    $upassword = validate($_POST['upassword']);
    
	if (empty($uname)) {
		header("Location: user.html?error=Hospital ID is required");
	    exit();
	}else if(empty($anum)){
        header("Location: user.html?error=Hospital Name is required");
	    exit();
	}else if(empty($pnum)){
        header("Location: user.html?error=City Name is required");
	    exit();
	}else if(empty($upassword)){
        header("Location: user.html?error=Website is required");
	    exit();
	}else {

    $sql ="INSERT INTO USER (Uname, Aadhar, Phone, UPassword)
    VALUES ('$uname', '$anum', '$pnum', '$upassword')";
	
		$result = mysqli_query($conn, $sql);

		if ($result) {
				//header("Location: hospregis.html?error=Inserted successfully");
			echo "<script>alert('Registration Complete');window.location.href='user.html?error=Successfully Registered';</script>";
	        exit();
		}
		else{
		       echo "<script>alert('User is already Registered');window.location.href='usersign-inA.html?error=already Registered';</script>";
	        exit();
		}
	}
}
else {
	    header("Location: user.html");
	    exit();
}
    
    ?>   