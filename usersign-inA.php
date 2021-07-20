
<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['anum']) &&  isset($_POST['upassword'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$anum = validate($_POST['anum']);
	$upassword = validate($_POST['upassword']);


	if (empty($anum)) {
		header("Location: usersign-inA.php?error=Aadhar number is required");
	    exit();
	}


	else if(empty($upassword)){
        header("Location: usersign-inA.php?error=Password is required");
	    exit();
	}

	else{
		

        
		$sql = "SELECT * FROM USER WHERE Aadhar='$anum' AND UPassword='$upassword' ";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {

				$_SESSION['anum'] = $anum;
            	header("Location: usersign-inB.php");
		        exit();
            
		}else{
       
          $sqlx = "SELECT * FROM USER WHERE Aadhar='$anum' ";
          $resultx = mysqli_query($conn, $sqlx);

		  if (mysqli_num_rows($resultx) === 0) {
			
           echo "<script>alert('This User is not Registered,please Register!!');window.location.href='user.html?error=not Registered';</script>";
		         exit();
		  }
		  else {
			$sqly = "SELECT * FROM USER WHERE UPassword='$upassword' ";
          $resulty = mysqli_query($conn, $sqly);

		if (mysqli_num_rows($resulty) === 0) {
			
           echo "<script>alert('Incorrect Password');window.location.href='usersign-inA.html?error=Incorrect password';</script>";
		        exit();
            }

		
	      }       


		}
	}
	
}else{
	header("Location: usersign-inA.html");
	exit();
}
