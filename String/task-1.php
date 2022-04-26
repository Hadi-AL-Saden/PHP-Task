<?php

echo "<h3>Convert the entered string to uppercase.</h3>";
$str = "orange";
$cap_str = strtoupper($str);
print ($cap_str);

?>
<?php
echo "<h3>Convert the entered string to lowercase.</h3>";
	$str = "ORANGE";
	$lowerStr = strtolower($str);
	echo $lowerStr
?>


<?php
echo "<h3>Make the first letter of the string uppercase.</h3>";
echo ucfirst("orange");
?>

<?php
echo "<h3>	Make the first letter of each word capitalized.</h3>";
echo ucwords("hello world");
?>