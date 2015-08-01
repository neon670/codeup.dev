<html>
<head>
	 <meta charset="utf-8">
  <title>jQuery UI Draggable - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>



  <style>
  #draggable { 
  	width: 15px; 
  	height: 15px; 
  	padding: 0.5em; 
  	border: transparent;
  }
  .ui-widget-content{
  	width: 80px;
  }
  #droppable { 
  	width: 150px; 
  	height: 150px; 
  	padding: 0.5em; 
  	float: right; 
  	margin: 10px; 
    border:solid;
  }


  </style>
  <script>

  $(function() {
    $( "#draggable" ).draggable();
    // $("#droppable").droppable({
    // 	drop: function(event, ui){
    // 		$(this)
    // 		.addClass("ui-state-highlight")
    // 		.find("p")
    // 			.html("Boom!");
    // 	}
    // }):
  });
  </script>
</head>
<body>
 
<div id="draggable">
 	<p><img id ="img" src="/img/beer.png"></p>
</div>

<div id="droppable">
	<p>Drop me here!!</p>

</div>
<div>
 

<div>
  <?php
	$x =1;
	while($x<=100){
		if($x % 15 == 0){
		echo "fizzbuxx<br>";
		}elseif($x % 3==0){
		echo "Buzz<br>";
		}elseif ($x % 5==0){
		echo "Fizz<br>";
		}else{
			echo "$x<br>";
		}
	$x++;
}

?>

</div>
<div>
  <?php
  $x = 0;
  if( $x <= 0){
   

    echo "$x";
    $x ++;
  }
    ?> 
<form class="rating">
    <span><input type="radio" name="rating" id="str5" value="5"><label for="str5"></label></span>
    <span><input type="radio" name="rating" id="str4" value="4"><label for="str4"></label></span>
    <span><input type="radio" name="rating" id="str3" value="3"><label for="str3"></label></span>
    <span><input type="radio" name="rating" id="str2" value="2"><label for="str2"></label></span>
    <span><input type="radio" name="rating" id="str1" value="1"><label for="str1"></label></span>
</form>
</body>
</html>