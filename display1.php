<?php 
session_start(); 
include "db_conn.php";

$qt_o2=$_SESSION['qt_o2'];
$qt_rem=$_SESSION['qt_rem'];
$city=$_SESSION['city'];


echo "<body style='background-color:#DCC7AA'>";



$sql ="SELECT Hosp_id, HName, City, Website, Contact, Email, Qt_O2, Qt_Remdesivir, HAddress FROM HOSPITAL WHERE (Qt_Remdesivir>='$qt_rem' OR Qt_O2>='$qt_o2') AND City = '$city'";



$result = mysqli_query($conn, $sql);
if( (mysqli_num_rows($result) != 0) ){
echo "<table border='1'>
<tr>
<th style='background-color: #F7882F'> Hospital id</th>
<th style='background-color: #F7882F'> Hospital Name</th>
<th style='background-color: #F7882F'> City </th>
<th style='background-color: #F7882F'> Website </th>
<th style='background-color: #F7882F'> Contact </th>
<th style='background-color: #F7882F'> Email </th>
<th style='background-color: #F7882F'> Qt_O2 </th>
<th style='background-color: #F7882F'> Qt_Remdesivir </th>
<th style='background-color: #F7882F'> HAddress </th>
</tr>";

#echo "<th style='background-color:red'>";

while($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $row['Hosp_id'] . "</td>";
	echo "<td>" . $row['HName'] . "</td>";
	echo "<td>" . $row['City'] . "</td>";
	echo "<td>" . $row['Website'] . "</td>";
	echo "<td>" . $row['Contact'] . "</td>";
	echo "<td>" . $row['Email'] . "</td>";
	echo "<td>" . $row['Qt_O2'] . "</td>";
	echo "<td>" . $row['Qt_Remdesivir'] . "</td>";
	echo "<td>" . $row['HAddress'] . "</td>";
	echo "<tr>";

}

echo "</table>";
}
else{
    echo "<script>alert('No Hospital meet your requirements');window.location.href='usersign-inB.html?error=Hospitals not found ';</script>";
	        exit();
}

?>