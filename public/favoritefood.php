<?php

$favoriteFoods = ['Brownies', 'Pound Cake', 'Doughnuts', 'Stir Fry', 'Steak'];
$year = date('Y');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Codeup!</title>
</head>
<body>
    <h1>My Favorite Foods <?php echo $year; ?></h1>
    <ol>
    <?php foreach ($favoriteFoods as $favoriteFood) { ?>
        <li><?= $favoriteFood;  ?></li>
        <!--  is the same as <?php echo " "?> -->
    <?php } ?>
    </ol>
</body>
</html>