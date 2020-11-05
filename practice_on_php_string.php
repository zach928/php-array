<!-- addcslashes -->
<?php
$str = "Hello My Name is Aman Sharma";
echo  "$str",'<br>';
echo addcslashes($str,'A..Z'),'<br>';
echo addcslashes($str,'a..z'),'<br>';
?>

<!-- addslashes -->
<?php
$str = "How's your study is going man";
echo "$str",'<br>';
echo addslashes($str),'<br>';
?>

<!-- bin2hex -->
<?php
$str = bin2hex("Vishnu Soni");
echo "$str";
?>

<!-- chop -->
<?php
$str = "My name is Aman Sharma";
echo $str . "<br>";
echo chop($str,"Aman");
?>

<!-- chr -->
<?php
echo chr(449) . "<br>"; 
echo chr(0002) . "<br>"; 
echo chr(0x0501) . "<br>";
?>

<!-- chunk_split -->
<?php
$str = "Central University of Haryana";
echo chunk_split($str,2,"=");
?>