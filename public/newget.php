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

<DOCTYPE <html>
<head>
    <title>NEW GET</title>
</head>
<body>

</body>
</html>