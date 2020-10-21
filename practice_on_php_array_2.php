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

<!-- 
    Q.12.
        Write a PHP script to sort an array using case-insensitive natural ordering.
 -->
<?php
 $colors = array(
    "color1", "color20", "color3", "color2"
);
natcasesort($colors);
print_r($colors);
?>