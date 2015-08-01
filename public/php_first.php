<html>
<head>
	<title>Learning PHP</title>
</head>
<body>
      <?php
      	$a =5;
      	$b= 11;
      	$c= '10';
      	 if ($a < $b) {
     // output the appropriate result
     echo "$a is less $b<br>";
 }

 if ($b > $a) {
     // output the appropriate result
     echo "$b is greater $a<br>";
 }

 if ($b >= $c) {
     // output the appropriate result
     echo "$b is greater than or equal to $c<br>";
 }

 if ($b <= $c) {
     // output the appropriate result
     echo "$b is less than or equal $c<br>";
 }

 if ($b == $c) {
     // output the appropriate result
     echo "$b is equal $c<br>";
 }

 elseif ($b === $c) {
     // output the appropriate result
     echo "$b is equal $c<br>";
 }

 // output the appropriate result
 elseif ($b != $c) {
     echo "$b is not equal to $c<br>";
 }

 // output the appropriate result
 elseif ($b != $c) {
     echo "$b is not identical to $c<br>";
 }		

?>

    
</body>
</html>