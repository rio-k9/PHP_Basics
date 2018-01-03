<?php
// Summary. while, for, do while, case switch - same as java
// string concactation echo "my variable is $myvar";
//logical boolean mathematical operators comparison operators all same as usual
//SQL connetion syntax - mysqli_connect('path', 'name', 'password')

$con = mysqli_connect('localhost', 'xxx', 'pants');

if (!$con){
  die("Can't connect to the database.'");
}
else {
  echo "Connected!";
}

 ?>
