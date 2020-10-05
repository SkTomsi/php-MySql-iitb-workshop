<form action = "q2_str_function.php" method = "POST">
Enter a string:<input type = "text" name = "str">
<input type = "submit" value = "submit">
</form>

<?php
error_reporting(0);
 $string = $_POST['str'];
 if(isset($string)){

  echo "The number of characters is : ".strlen($string)."<br>";
  $exparray = explode(" ",$string);
  foreach($exparray as $value);
  {
  echo "After breaking the string : ".$value."<br>";
  }
  echo "The reverse of the string is : ".strrev($string)."<br>";
  echo "Lower Case form : ".strtolower($string)."<br>";
  echo "Upper Case form : ".strtoupper($string)."<br>";
  $result = substr_replace($string," Tomcy",6,11);
  echo "Replacing the substring : ".$result;
 }
?>