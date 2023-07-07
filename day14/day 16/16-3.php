<?php 
  $array1 = array("key 1"=>50,"key 2"=>70,"key 3"=>30);
  print_r($array1); 
 
  $array2 =array(50,40,10);
  echo "<br/>";
  print_r($array2);

  $array_brac = ["value 1","value 2","value 3"];
  echo "<br/>";
  print_r($array_brac);
  $mul = array("1st" => array("1st_1st"=>50,"1st_2nd"=>60),
               "2nd" => array("2nd_1st"=>50,"2nd_2nd"=>60),
               "3st" => array("1st_1st"=>80,"1st_2nd"=>90)
             );
  echo "<br/>";
  print_r($mul);
   ?>