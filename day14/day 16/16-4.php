<?php 
  $array1 = array("1"=>50,"3"=>70,"2"=>30);
  print_r($array1); 
 
  $array2 =array(10,40,50);
  echo "<br/>";
  print_r($array2);

  $array_brac = ["value 1","value 2","value 3"];
  echo "<br/>";
  print_r($array_brac);
  $mul = array("1st" => array("1st_1st"=>50,"1st_2nd"=>60),
               "2nd" => array("2nd_1st"=>50,"2nd_2nd"=>array("sub1"=>1,"sub"=>2)));
  echo "<br/>";
  print_r($mul);
  Ksort($array1);
  rsort($array2);
  echo"<br/>";
  print_r($array1);
  echo "<br/>";
  print_r($array2);
   ?>