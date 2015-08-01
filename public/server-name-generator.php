<?php
// function getRandomElement($array) {
// 	$randomKey = array_rand($array);
// 	return $array[$randomKey];
// }

// $nouns = ['zombies', 'dick cheney', 'god', 'people', 'children', 'birds', 'dogs', 'cats', 'rabbits', 'men', 'women', 'rain', 'eyes', 'feet', 'pig', 'dice'];
// $adjectives = ['shy', 'happy', 'flying', 'exploding', 'thunder', 'horrible', 'totes ma goats', 'spin', 'gross', 'short', 'round', 'skinny', 'tall','sneaky', 'rich', 'young', 'old', 'thick', 'smelly', 'tiny','beautiful'];
function pageController(){
	$nouns = ['zombies', 'dick cheney', 'god', 'people', 'children', 'birds', 'dogs', 'cats', 'rabbits', 'men', 'women', 'rain', 'eyes', 'feet', 'pig', 'dice'];
	$adjectives = ['shy', 'happy', 'flying', 'exploding', 'thunder', 'horrible', 'totes ma goats', 'spin', 'gross', 'short', 'round', 'skinny', 'tall','sneaky', 'rich', 'young', 'old', 'thick', 'smelly', 'tiny','beautiful'];
	$date = [];
	// $data['randomAdjective'] = array_rand($adjectives);
	// $data['randomNoun'] = array_rand($nouns);
	$data['randomAdjective'] = $adjectives[rand(0, count($adjectives) -1)];
	$data['randomNoun'] = $nouns[rand(0, count($nouns) -1)];
	// $data['randomAdjective'] = getRandomElement($adjectives);
	// $data['randomNoun'] = getRandomElement($nouns);


	return $data;





	// $noun = array_rand($nouns);
	// $adjective = array_rand($adjectives);	

 }
 	extract(pageController());
?>
<style type="text/css">
body{
	background-image: url("/img/recycled_texture.jpg");
}
h1{
	/*background-color: red;*/
	padding-left: 300;
	color: white;
}
h2{
	color: white;
}
div{
	padding-left: 350;
}

</style>

<!DOCTYPE <html>
<head>
	<title>Random adjs and nouns</title>
</head>
<body>
	<h1> My server name: </h1>
	
     	
    <div>
    	<!-- <h2><?php echo $adjectives[$adjective] . " " . $nouns[$noun];  ?></h2> -->
    	<h2> <?php echo $randomAdjective . " " . $randomNoun; ?></h2>
    </div>

    <div>
    	<!-- <button onClick(document.location.reload(true))><pre>Get New Phrase</pre></button> -->
    	<button INPUT Type="button" VALUE="Reload Page" onClick="history.go(0)">Reload Phrase </button>
    </div>

  
   
	&copy; <?php echo date('Y'); ?>
</body>
</html>