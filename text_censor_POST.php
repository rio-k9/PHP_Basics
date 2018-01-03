<?php

$find = array('John', 'Maria', 'Tiffany');
$replace = array('J**n', 'M***a', 'T*****y');


if (isset($_POST['user_input'])&&!empty($_POST['user_input'])){

  $user_input = $_POST['user_input'];



  $user_input_new = str_ireplace($find, $replace, $user_input);

  echo $user_input_new;

}

 ?>

 <form action="text_censor.php" method="POST">
   <textarea name="user_input" rows="6" cols="30"></textarea>
   <br />
   <br />
   <input type="submit" value="Submit" />
 </form>
