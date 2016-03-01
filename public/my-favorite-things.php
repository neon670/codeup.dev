<?php
	$favoriteThings = ['racquetball', 'food', 'tennis', 'coding', 'yoga','soccer','web design'];
?>



<!DOCTYPE <html>
<head>
	<title>Favortie things</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body>
	<h1> My Favorite Things </h1>
	<table class="table table-striped">
		
	   <?php foreach ($favoriteThings as $favoriteThing) { ?></tr>
	       <tr> <td><?php echo $favoriteThing ?></td></tr>
	    <?php } ?>
	</table>
<!-- table
	foreach($contacts as $row);
		<tr>
			<foreach($row as $cell);
				<tr>
					<foreach($row as $cell);
						<td> =$cell; <td> 
				<endforeach
				</tr> -->
</body>
</html>

<!-- 
function getRandomElement($array) {
	$randomKey = array_rand($array);
	return $array[$randomKey];
}

// $nouns = ['zombies', 'dick cheney', 'god', 'people', 'children', 'birds', 'dogs', 'cats', 'rabbits', 'men', 'women', 'rain', 'eyes', 'feet', 'pig', 'dice'];
// $adjectives = ['shy', 'happy', 'flying', 'exploding', 'thunder', 'horrible', 'totes ma goats', 'spin', 'gross', 'short', 'round', 'skinny', 'tall','sneaky', 'rich', 'young', 'old', 'thick', 'smelly', 'tiny','beautiful'];
function pageController(){
	$nouns = ['zombies', 'dick cheney', 'god', 'people', 'children', 'birds', 'dogs', 'cats', 'rabbits', 'men', 'women', 'rain', 'eyes', 'feet', 'pig', 'dice'];
	$adjectives = ['unbearable', 'shy', 'happy', 'flying', 'exploding', 'thunder', 'horrible', 'totes ma goats', 'spin', 'gross', 'short', 'round', 'skinny', 'tall','sneaky', 'rich', 'young', 'old', 'thick', 'smelly', 'tiny','beautiful'];
	$data = [];
	// $data['randomAdjective'] = $adjectives[rand(0, count($adjectives) -1)];
	// $data['randomNoun'] = $nouns[rand(0, count($nouns) -1)];
	$data['randomAdjective'] = getRandomElement($adjectives);
	$data['randomNoun'] = getRandomElement($nouns);
 -->
