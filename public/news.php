<?php 
$date = date('Y m d');
$futuredate = strtotime('2017-02-2017');

?>
<?php require 'navbar.php'; ?>
<h3>Current Events As of <?= $date?> </h3>
<div id = 'news'>
    <p id = 'current'> <?= $date?> : we will be having a BBQ </p>

</div>

<?php require 'footer.php'; ?>



