<?php
// Summary. while, for, do while, case switch - same as java
// string concactation echo "my variable is $myvar";
//logical boolean mathematical operators comparison operators all same as usual
//SQL connetion syntax - mysql_connect('path', 'name', 'password')
//functions similar to javascript function myFunc() { echo "Rio";) myFunc();
//function arguements same as javascript
//string functions
//print_r() print array - else use echo

$shoppingList = array('Bacon', 'Chicken', 'Trifle');
$shoppingList[] = "Milk";
print_r($shoppingList);
$shoppingList[3] = "Chocolate Milk";
print_r($shoppingList);

//key value array / map
$shoppingCost = array('Bacon' => "£8", 'Chicken' => "£11.50", 'Trifle' => "£2.65");
print_r($shoppingCost);
 ?>
