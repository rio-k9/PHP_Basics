<?php

//print_r() print array - else use echo

$shoppingList = array('Bacon', 'Chicken', 'Trifle');
$shoppingList[] = "Milk";
print_r($shoppingList);
echo "<br />";
$shoppingList[3] = "Chocolate Milk";
print_r($shoppingList);
echo "<br />";

//key value array / map
$shoppingCost = array('Bacon' => "£8", 'Chicken' => "£11.50", 'Trifle' => "£2.65");
print_r($shoppingCost);
echo "<br />";
echo $shoppingCost['Chicken'];
 ?>
