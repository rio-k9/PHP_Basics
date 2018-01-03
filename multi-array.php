<?php

$myFood = array('Breakfast' =>
                              array('Bacon', 'Eggs', 'Toast'),
                'Dinner' =>
                              array('Chicken', 'Potatoes', 'Broccoli'));
foreach($myFood as $top_array => $inner_array) {
  echo '<strong>'.$top_array.'</strong><br />';
  foreach($inner_array as $ingredient) {
    echo $ingredient.'<br />';
  }
}
?>
