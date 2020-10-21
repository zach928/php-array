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

<!-- 
    Q.13.
        Write a PHP script to sort an array in reverse order (highest to lowest).
 -->

<?php
$colors = array("Red", "Orange", "Black", "White");
rsort($colors);
print_r($colors);
?>

<!-- 
    Q.14.
        Write a PHP program to generate an array with a range taken from a string.
 -->

<?php
$colors = array("Red", "Orange", "Black", "White");
$random_keys=array_rand($colors,2);
echo $colors[$random_keys[0]]."<br>";
echo $colors[$random_keys[1]]."<br>";
?>

<!-- 
    Q.15.
        Write a PHP program to get the index of the highest 
        value in an associative array.
 -->

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo array_search(max($age),$age);
?>