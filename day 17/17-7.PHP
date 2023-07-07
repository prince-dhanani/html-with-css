<?php 
	$a=array ("PINEAPPLE","GRAPES","APPLE","MANGO");
	print_r($a);
	echo "<br><br>using count()...";
	echo "<br><br>no. of element in array:".count($a);
	echo "<br><br>using sort()...<br>";
	sort($a);
	print_r($a);
	echo "<br><br>using array_reverse()...<br>";
	print_r(array_reverse($a));
	echo "<br><br>using list..";
	list($f1,$f2,$f3,$f4)=$a;
	echo "<br>after sorthing the fourth item in list is:".$f4;

	
 ?>