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

<!-- 
    Q.16.
        Write a PHP program to sort an associative array 
        (alphanumeric with case-sensitive data) by values.
 -->

 <?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort ($age);
print_r($age);
?>

<!-- 
    Q.17.
        Write a PHP script to lower-case and upper-case, all elements in an array.
 -->

 <?php
 $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
 print_r(array_change_key_case($age,CASE_UPPER));
 print_r(array_change_key_case($age,CASE_LOWER));
 ?>

<!-- 
    Q.18.
        Write a PHP script to count the total number of times a specific value appears in an array.
 -->

<?php
 $a=array("A","Cat","Dog","A","Dog");
print_r(array_count_values($a));
?>

<!-- 
    Q.19.
        Write a PHP function to create a multidimensional unique array for any single key index.
 -->

<?php
$a=array("A","Cat","Dog","A","Dog");
print_r(array_unique($a));

?>

<!-- 
    Q.20.
        Write a PHP program to remove duplicate values from an 
        array which contains only strings or only integers
 -->

<?php
    $colors = array( 
      0 => 'Red', 
      1 => 'Green', 
      2 => 'White', 
      3 => 'Black', 
      4 => 'Red', 
    ); 
    
    $numbers = array( 
      0 => 100, 
      1 => 200, 
      2 => 100, 
      3 => -10, 
      4 => -10, 
      5 => 0, 
    ); 
    print_r(array_unique($colors));
    print_r(array_unique($numbers));
?>

