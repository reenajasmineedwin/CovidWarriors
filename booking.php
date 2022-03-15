<?php

session_start(); 
include "db_conn.php";
      $qo2=$_SESSION['qt_o2'];
      $qrem=$_SESSION['qt_rem'];
      $ano=$_SESSION['anum'];
      $c=$_SESSION['city'];

if (isset($_POST['hospno1']) && isset($_POST['hospno2'])){

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

   
    $hospO2 = validate($_POST['hospno1']);
    $hospRem = validate($_POST['hospno2']);
   


	if(empty($hospO2)){
        header("Location: usersign-inB.html?error=O2 cylinders Quantity is required");
	    exit();
	}else if(empty($hospRem)){
        header("Location: usersign-inB.html?error=Remdesivir injections is required");
	    exit();
	}
	else {

$sqlo ="SELECT * FROM HOSPITAL WHERE (Qt_Remdesivir>='$qrem' OR Qt_O2>='$qo2') AND City = '$c' AND (Hosp_id='$hospO2' AND Hosp_id='$hospRem')";
$sqlk ="SELECT Hosp_id, Qt_O2 FROM HOSPITAL WHERE Qt_O2>='$qo2' AND City = '$c' AND Hosp_id='$hospO2'";
$sqll ="SELECT Hosp_id, Qt_Remdesivir FROM HOSPITAL WHERE Qt_Remdesivir>='$qrem' AND City = '$c' AND Hosp_id='$hospRem'";

$resulto = mysqli_query($conn, $sqlo);

$resultk = mysqli_query($conn, $sqlk);

$resultl = mysqli_query($conn, $sqll);

if( (mysqli_num_rows($resultk) != 0) AND (mysqli_num_rows($resultl) != 0) )
{
  

    $sqlres ="INSERT INTO RESERVE (aadharno,hospO2,qto2,hospRem,qtrem) VALUES ('$ano','$hospO2','$qo2','$hospRem', '$qrem')";
	
		$resultres = mysqli_query($conn, $sqlres);

		if ($resultres) {
			
			echo "<script>alert('Reservation Complete');window.location.href='usersign-inB.html?error=Successfully Reserved';</script>";
	        

	        $sqlb1="UPDATE HOSPITAL SET Qt_O2=Qt_O2-'$qo2' WHERE Hosp_id='$hospO2'";
	        $sqlb2="UPDATE HOSPITAL SET Qt_Remdesivir=Qt_Remdesivir-'$qrem' WHERE Hosp_id='$hospRem'";

	        $resultb1 = mysqli_query($conn, $sqlb1);
    
            $resultb2 = mysqli_query($conn, $sqlb2);

		}
		else{
		      
	        	echo mysqli_error($conn);
	        exit();
		}
}
else{



if( (mysqli_num_rows($resultk) != 0) )
{
  

    $sqlreserve1 ="INSERT INTO RESERVE (aadharno,hospO2,qto2) VALUES ('$ano','$hospO2','$qo2')";
	
		$resultreserve1 = mysqli_query($conn, $sqlreserve1);


		if ($resultreserve1) {
			
			echo "<script>alert('Reservation Complete for O2 cylinders');</script>";
	        $sqlaa="UPDATE HOSPITAL SET Qt_O2=Qt_O2-'$qo2' WHERE Hosp_id='$hospO2'";

	        $resultaa = mysqli_query($conn, $sqlaa);
		}
		else{
		      echo "<script>alert('Error in Reservation of O2 cylinders');window.location.href='usersign-inB.html?error=Error in Reservation';</script>";
	          exit();
		}
}
else{

if($hospO2=='-') {
	#echo "<script>alert('Reserved 0 Oxygen cylinders');</script>";
     
}
else{ 
 		
 	echo "<script>alert('Error in Reservation of O2 cylinders,Please enter the correct Hospital Id for O2 cylinders');</script>";  
	        
	}
}
 

if( (mysqli_num_rows($resultl) != 0) )
{

    $sqlreserve2 ="INSERT INTO RESERVE (aadharno,hospRem,qtrem) VALUES ('$ano','$hospRem', '$qrem')";
	
		$resultreserve2 = mysqli_query($conn, $sqlreserve2);

		if ($resultreserve2) {
			
			echo "<script>alert('Reservation Complete for Remdesivir injections');window.location.href='usersign-inB.html?error=Successfully Reserved';</script>";
			$sqlb2="UPDATE HOSPITAL SET Qt_Remdesivir=Qt_Remdesivir-'$qrem' WHERE Hosp_id='$hospRem'";
			$resultb2 = mysqli_query($conn, $sqlb2);
	        #exit();
		}
		else{
		       echo "<script>alert('Error in Reservation of Remdesivir injections');window.location.href='usersign-inB.html?error=Error in Reservation';</script>";
	        #exit();
		}
}
else{

      if($hospRem =='-') {
              if($resultk){
             echo "<script>window.location.href='usersign-inB.html?error=Successfully Reserved';</script>";
                 
              }
               else{
	             echo "<script>window.location.href='display1.php?error=Error in Reservation';</script>";
	            
	        }
	        #exit(); 
	    }
	   else{
	   	   #echo "<script>alert('Reserved 0 Remdesivir injections');window.location.href='display1.php?error=0 Remdesivir injections reserved';</script>";
	   	echo "<script>alert(' Error in Reservation of Remdesivir injections,Please enter the correct Hospital Id for Remdesivir injections');window.location.href='display1.php?error=Error in Reservation';</script>";
	      
	        #exit(); 

	   }   
	 }
}
}
   
	#header("Location: usersign-inB.html");
	#exit();
 

}

else{header("Location: booking.html");
	exit();
    }
 ?>