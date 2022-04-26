<?php

$strings = array("remove");

foreach ($strings as $testcase) {
	if (ctype_lower($testcase)) {
		echo " Your String is Ok \n";
	} else {
		echo " Your String is not Ok \n";
	}
}
?>
