<!--
     Q. 1. 
     $color = array('white', 'green', 'red', 'blue', 'black');
     Write a script which will display the following string - Go to the editor 
    "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
    and the words 'red', 'green' and 'white' will come from $color.
-->

<?php
   $color = array('white', 'green', 'red', 'blue', 'black');
   echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
   ?>

<!--
    Q.2.
    $color = array('white', 'green', 'red'') Go to the editor
    Write a PHP script which will display the colors in the following way :
    Output :
    white, green, red,
    green
    red
    white
    -->
<?php
$color = array('white', 'green', 'red');
foreach ($color as $k) {
    echo "$k,";
}
sort($color);
echo "<ul>";
foreach($color as $y)
        {
            echo "<li>$y</li>";
        }    
echo "</ul>";
?>

<!--
    Q.3.
         $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
        Create a PHP script which displays the capital and country name from the above array $ceu. Sort the list by the capital of the country. Go to the editor
        Sample Output :
        The capital of Netherlands is Amsterdam 
        The capital of Greece is Athens 
        The capital of Germany is Berlin 
        - - - - - - - - - - - - - - - - - - - - - - - - -
        - - - - - - - - - - - - - - - - - - - - - - - - -
       -->



<?php
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
asort($ceu);
echo "<ul>";
foreach($ceu as $country => $capital)
        {
            echo "<li>The capital of $country is $capital </li>";
        }
echo "</ul>";
?>

<!--
    Q.4.
       4.   $x = array(1, 2, 3, 4, 5);
            Delete an element from the above PHP array. After deleting the element, integer keys must be normalized.
            -->
<?php
        $x = array(1, 2, 3, 4, 5);
        unset($x[3]);
        print_r($x);
?>

<!--
    Q.5.    
        $color = array(4 => 'white', 6 => 'green', 11=> 'red');
        Write a PHP script to get the first element of the above array.
        -->

<?php
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color);

?>

<!--
    Q.6.
       Write a PHP script that inserts a new item in an array in any position. Go to the editor
        Expected Output :
        Original array : 
        1 2 3 4 5 
        After inserting '$' the array is :
        1 2 3 $ 4 5
        -->
<?php
$original = array( '1','2','3','4','5' );
echo 'Original array : '."\n";
foreach ($original as $x) 
{echo "$x ";}
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); 
echo " After inserting '$' the array is ";
foreach ($original as $x) 
{echo "$x ";}

?>
<!-- 
    Q.7.
       Write a PHP script to sort the following associative array : Go to the editor
        array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
                a) ascending order sort by value
                b) ascending order sort by Key
                c) descending order sorting by Value
                d) descending order sorting by Key                                  
 -->

 <?php
$a = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
asort($a);
ksort($a);
arsort($a);
krsort($a);
foreach($a as $x => $x_value)
        {
            echo "Age of" . $x . ", is" . $x_value;
            echo "<br>";
        }
    
    ksort($a);
    foreach($a as $x => $x_value)
        {
            echo "Age of" . $x . ", is" . $x_value;
            echo "<br>";
        }
    
    arsort($a);
    foreach($a as $x => $x_value)
        {
            echo "Age of" . $x . ", is" . $x_value;
            echo "<br>";
        }
    
    krsort($a);
    foreach($a as $x => $x_value)
        {
            echo "Age of" . $x . ", is" . $x_value;
            echo "<br>";
        }
    
?>

<!-- 
    Q.8.    
    Write a PHP program to merge (by index) the following two arrays. Go to the editor
    Sample arrays :
    $array1 = array(array(77, 87), array(23, 45));
    $array2 = array("w3resource", "com");
 -->
<?php
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");
print_r(array_merge_recursive($array1,$array2));
?>

<!-- 
    Q.9.    
            Write a PHP script to get the largest key in an array.
 -->

<?php
$a = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
$max_key = max($a);
echo $max_key;
?>

<!-- 
    Q.10.
        Write a PHP script to print "second" and Red from the following array. Go to the editor
        Sample Data :
        $color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
        "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
        "holes" => array ( "First", 5 => "Second", "Third"));
 -->

 <?php
$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
"holes" => array ( "First", 5 => "Second", "Third"));
echo $color["holes"][5]; // prints "second"
echo $color["color"]["a"];
?>
