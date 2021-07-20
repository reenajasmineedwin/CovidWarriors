<?php 
session_start(); 
include "db_conn.php";
$anum=$_SESSION['anum'];

if (isset($_POST['qt_o2']) && isset($_POST['qt_rem']) && isset($_POST['city'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

   
    $qt_o2 = validate($_POST['qt_o2']);
    $city = validate($_POST['city']);
    $qt_rem= validate($_POST['qt_rem']);


	if(empty($qt_o2)){
        header("Location: usersign-inB.html?error=O2 cylinders Quantity is required");
	    exit();
	}else if(empty($qt_rem)){
        header("Location: usersign-inB.html?error=Remdesivir injections is required");
	    exit();
	}else if(empty($city)){
        header("Location: usersign-inB.html?error=City is required");
	    exit();
	}
	else {

        
	$sql ="UPDATE USER SET Qt_O2='$qt_o2' , Qt_Remdesivir='$qt_rem', Pref_city='$city' WHERE Aadhar='$anum'";
        
		$result = mysqli_query($conn, $sql);

		if ($result) {
			$_SESSION['qt_o2'] = $qt_o2;
            $_SESSION['qt_rem'] = $qt_rem;
            $_SESSION['city'] = $city;
			header("Location: display1.php");
			//echo "<script>alert('Updated Successfully');window.location.href='display.php';</script>";
		         exit();
		    exit();
			}
		else{
			header("Location: usersign-inB.html?error=ERROR!!");
	        exit();
		}

	}
	
}else{
	header("Location: usersign-inB.html");
	exit();
}