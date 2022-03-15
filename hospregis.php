<?php 
session_start(); 
include "db_conn.php";


if (isset($_POST['hid']) && isset($_POST['hname']) && isset($_POST['city']) && isset($_POST['website']) && 
isset($_POST['contact']) && isset($_POST['email']) && isset($_POST['psw']) && isset($_POST['o2']) &&
isset($_POST['remdesivir']) && isset($_POST['address'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}


    $hid = validate($_POST['hid']);
	$hname = validate($_POST['hname']);
    $city = validate($_POST['city']);
    $website = validate($_POST['website']);
    $contact = validate($_POST['contact']);
    $email = validate($_POST['email']);
    $psw = validate($_POST['psw']);
    $o2 = validate($_POST['o2']);
    $remdesivir= validate($_POST['remdesivir']);
    $address= validate($_POST['address']);

    

	if (empty($hid)) {
		header("Location: hospregis.html?error=Hospital ID is required");
	    exit();
	}else if(empty($hname)){
        header("Location: hospregis.html?error=Hospital Name is required");
	    exit();
	}else if(empty($city)){
        header("Location: hospregis.html?error=City Name is required");
	    exit();
	}else if(empty($website)){
        header("Location: hospregis.html?error=Website is required");
	    exit();
	}else if(empty($contact)){
        header("Location: hospregis.html?error=Contact is required");
	    exit();
	}else if(empty($email)){
        header("Location: hospregis.html?error=Email is required");
	    exit();
	}else if(empty($psw)){
        header("Location: hospregis.html?error=Password is required");
	    exit();
	}else if(empty($o2)){
        header("Location: hospregis.html?error=Availabe O2 cylinders is required");
	    exit();
	}else if(empty($remdesivir)){
        header("Location: hospregis.html?error=Availabe remdesivir injections is required");
	    exit();
	}else if(empty($address)){
        header("Location: hospregis.html?error=Address is required");
	    exit();
	}else {

        
	
        
    $sql ="INSERT INTO HOSPITAL (Hosp_id, HName, City, Website, Contact, Email, HPassword, Qt_O2, Qt_Remdesivir, HAddress)
    VALUES ('$hid', '$hname', '$city', '$website', '$contact', '$email', '$psw', '$o2', '$remdesivir', '$address')";
	
		$result = mysqli_query($conn, $sql);

		if ($result) {
				//header("Location: hospregis.html?error=Inserted successfully");
			echo "<script>alert('Registration Complete');window.location.href='hospregis.html?error=successfully Registered';</script>";
	        exit();
			}
		else{
		       echo "<script>alert('Hospital is already Registered');window.location.href='hospsign-inA.html?error=already Registered';</script>";
	        exit();
		}
	}
	
}else{
	header("Location: hospregis.html");
	exit();
}