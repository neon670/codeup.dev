<?php
var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
    <title>POST Example1</title>
</head>
<body>
    <form action="form_results.php" method="POST">
        <label>Name</label><br>
        <input type="text" name="name"><br>
        <label>Number</label><br>
        <input type="text" name="number"><br>
        <input type="submit">

    </form>
</body>
</html>