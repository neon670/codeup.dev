<?php
function pageController()
{
    // Initialize an empty data array.
    $data = array();

    if(empty($_GET['counter'])){
    	$data['counter'] = 0;
    } else {

    	if ($_GET['result'] == 'hit'){
    		$data ['counter'] = $_GET['counter'];
    	}
    	if ($_GET['result'] == 'miss'){
    		$data ['counter'] = 0;
    	}
    } 

      return $data; 
    
 } 	
   		
  
   
    // Return the completed data array.
     



// Call the pageController function and extract all the returned array as local variables.
extract(pageController());
?>

<style type="text/css">
body{
	background-image: url(/img/beer.png);
}
#counter{
    text-align: center;
    font-size: 20;
    color-background: black;
    padding-top: 100px;
}



</style>
 
 <!-- Only use echo, conditionals, and loops anywhere within the HTML. -->
<DOCTYPE <html>
<head>
	<title></title>
</head>
<body>
    <div id = "pong">
	    <h1>PONG</h1>
    </div>
    <div id = "counter">
	    <h2><?php echo $counter ?></h2>
     
    	<a href="ping.php?result=hit&counter=<? echo $counter + 1; ?>">HIT</a>
    	<br>
    	<a href="ping.php?result=miss">MISS</a>
     </div> 	

</body>
</html>


