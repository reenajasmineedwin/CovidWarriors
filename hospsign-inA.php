
<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['hid']) &&  isset($_POST['psw'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$hid = validate($_POST['hid']);
	$psw = validate($_POST['psw']);


	if (empty($hid)) {
		header("Location: index.php?error=Hospital ID is required");
	    exit();
	}


	else if(empty($psw)){
        header("Location: index.php?error=Password is required");
	    exit();
	}

	else{
		

        
		$sql = "SELECT * FROM HOSPITAL WHERE Hosp_id='$hid' AND HPassword='$psw' ";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			
				$_SESSION['hid'] = $hid;
            	header("Location: hospsign-inB.php");
		        exit();
            
		}else{
       
          $sqlx = "SELECT * FROM HOSPITAL WHERE Hosp_id='$hid' ";
          $resultx = mysqli_query($conn, $sqlx);

		  if (mysqli_num_rows($resultx) === 0) {
			
           echo "<script>alert('No hospital with this Id is Registered,please Register!!');window.location.href='hospregis.html?error=not Registered';</script>";
		         exit();
		  }
		  else {
			$sqly = "SELECT * FROM HOSPITAL WHERE HPassword='$psw' ";
          $resulty = mysqli_query($conn, $sqly);

		if (mysqli_num_rows($resulty) === 0) {
			
           echo "<script>alert('Incorrect Password');window.location.href='hospsign-inA.html?error=Incorrect password';</script>";
		        exit();
            }

		
	      }       


		}
	}
	
}else{
	header("Location: hospsign-inA.html");
	exit();
}
