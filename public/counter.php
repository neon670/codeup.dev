<?php
 
function pageController()
{
    // Initialize an empty data array.
    $data = array();

    // Add data to be used in the html view.
    
    // if (!isset($_GET['counter'])){
    // 	$counter = 0;
    // } elseif(!empty($_GET['move'] = 'up')){
    // 	$counter ++;
    // 	$data['counter'] = $counter;
    // } elseif(!empty($_GET['move'] = 'down')){
    // 	$counter --;
    // 	$data['counter'] = $counter;
    // }

    if (empty($_GET['counter'])){
    	$counter = 0;
    } else {
    	$counter = $_GET['counter'];
    }

    $data['counter'] = $counter;
    // Return the completed data array.
    return $data;    
}

// Call the pageController function and extract all the returned array as local variables.
extract(pageController());
?>
<!DOCTYPE <html>
<head>
<!-- 	<?= var_dump($_GET) ?> -->
	<title></title>
</head>
<body>
		<h1> Counter Exercise</h1>
		<!-- h2 shows current counter -->
		 <h2><?= $counter ?></h2>

		<!-- up link  -->
		<a href="?move=up&counter=<?php echo $counter + 1; ?>">Up</a>
		<br>
		<!-- down link -->

		<a href="?move=down&counter=<?php echo $counter - 1; ?>">Down</a>
</body>
</html>