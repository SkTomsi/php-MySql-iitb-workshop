<?php
require("connect.php");

$extract= (" SELECT * FROM `class1` WHERE name='Rohan' ");
$getdata = mysqli_query($conn , $extract);

while($row = mysqli_fetch_assoc($getdata)){ 
  $name=$row['name'];
  $m5=$row['sub5'];
  $total_obt=$row['total obtained'] ;
  $percent=$row['percent'];

  @$new_m5=99;
  @$new_total_obt=$total_obt-$m5+$new_m5 ;
  @$new_percent=  $new_total_obt/5;
  echo  "Marksheet before updating :<br> Subject 5 = ".$m5."<br>Total Marks obtained : ".$total_obt."<br>Percentage Obtained : ".$percent." %<br>";

  $update="UPDATE `class1` SET `sub5`=$new_m5, `total obtained`=$new_total_obt, `percent`=$new_percent WHERE name='Rohan'";
    if (mysqli_query($conn, $update))
    {
      echo "<br>Update done sucessfully<br><br>";
    }
    else
    {
      echo "error updating record :" .mysqli_error($connect);
    }
 }
 echo  @$name." has updated marksheet:<br> Subject 5 = ".@$new_m5."<br>Total Marks obtained : ".@$new_total_obt."<br>Percentage Obtained : ".@$new_percent." %" ;

 mysqli_close($conn);

?>
