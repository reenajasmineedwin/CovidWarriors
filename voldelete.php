<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['aadhar']) &&  isset($_POST['psw'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$aadhar = validate($_POST['aadhar']);
	$psw = validate($_POST['psw']);


	if (empty($aadhar)) {
		header("Location: index.php?error=Hospital ID is required");
	    exit();
	}


	else if(empty($psw)){
        header("Location: index.php?error=Password is required");
	    exit();
	}

	else{
		

        
		$sqlu = "SELECT * FROM VOLUNTEER WHERE Aadhar='$aadhar' ";

		$resultu = mysqli_query($conn, $sqlu);

		if (mysqli_num_rows($resultu) === 1) {
			
				$sqlv = "SELECT * FROM USER WHERE UPassword='$psw' AND Aadhar='$aadhar' ";
                $resultv = mysqli_query($conn, $sqlv);
                    
                   if (mysqli_num_rows($resultv) === 1) {

                   	   $sqlw = "DELETE FROM VOLUNTEER WHERE Aadhar='$aadhar' ";
                       $resultw = mysqli_query($conn, $sqlw); 
                       echo "<script>alert('Removed as a Volunteer');window.location.href='voldelete.html?error=not Registered';</script>";
		               exit();


                   }
                   else{
                          echo "<script>alert('Incorrect Password');window.location.href='voldelete.html?error=not Registered';</script>";
		                  exit();
                    }

		        exit();
            
		}
		else{
       
                 echo "<script>alert('You are not Registered as a Volunteer');window.location.href='voldelete.html?error=not Registered';</script>";
		         exit();
          


		}
	}
	
}else{
	header("Location: voldelete.html");
	exit();
}
