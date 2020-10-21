<!-- 
    Q.11.
        Write a PHP program to sort a multi-dimensional
         array set by a specific key. 
 -->

<?php
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
array_multisort($cars);
print_r($cars);
?>