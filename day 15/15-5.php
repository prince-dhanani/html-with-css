<?php 
  $single_quote ='<br><a href ="http://google.com">google</a></br>';
  echo $single_quote;
  echo "<br/>";
  $single_quote ='<br><a href ="http://"php.net">php</a></br>';
  echo $single_quote;
  echo "<br/>";
  echo <<<abc
     <div class ='a'><div/>
     <h2>hello</h2>
     <h3>world</h3>
     abc;
 ?>