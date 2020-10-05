<?php 
require ("connect.php");

$extract = "SELECT * FROM `class1` WHERE name = 'Rohan'";

if ($row = mysql_fetch_assoc($extract)) {
	$tot_obt = $row['totalMarks'];
    $old_m5 = $row['sub5'];
    $m5 = 99;
    $percent = $row['percent'];

    echo $tot_obt. $old_m5. $percent;

   /* $new_tot = $tot_obt - $old_m5 + $m5;
    $percent = ($tot_obt/500)*100;

    $update = "UPDATE `class1` SET sub5=$m5, total obtained = $new_tot  , percent= $percent  WHERE name = 'Rohan' ";
    	if($conn->query($update)===TRUE){
    		echo "Roham's record updates successfully !<br>";
    	}
    	else{
    		echo "Error updating record: " . $conn->error;
    	}

}
echo "Rohan , Subject 5 : $m5/100<br>Total Marks obtained : $tot_obt<br>Percentage obtained : $percent %";
*/
$conn->close();
?>