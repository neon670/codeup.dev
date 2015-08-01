<link rel="stylesheet" href="/css/index.css">
<?php require 'navbar.php'; ?>

<p>
	<ul>
		<li>blah blah blah</li>
		<br>
		<li>someoe@gmail.com</li>
		<br>
		<li>phone number</li>
	</ul>
</p>
<?php 
	for($i = 0; $i <= 100; $i++){
		if($i % 15 == 0){
			echo "fizz buzz<br>";
		}elseif ($i % 3 == 0){
			echo "fuzz<br>";
		}elseif ($i % 5 == 0){
			echo "buzz<br>";
		}else{
			echo "$i<br>";
		};
	};
?>	
<?php require 'footer.php'; ?>
