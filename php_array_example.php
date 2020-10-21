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
sort($color);
echo "<ul>";
foreach($color as $y)
        {
            echo <li>$y</li>;
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
echo "<ul>"
foreach ($ceu as $country => $capital )
        {
            echo "<li>The capital of $country is $capital </li>";
        }

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
 $a = array(1 2 3 4 5);
 array_pust($a,4);
 print_r($a);
?>