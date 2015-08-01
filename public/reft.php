<?php

require '../parks_login.php';
// require '../parks_seeder.php';
require '../db_connect.php';
//============================================================================
$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;
$count = (int) ($dbc->query('SELECT count(*) FROM national_parks')->fetchColumn());
function get_national_parks($dbc,$offset) 
	{
    // Bring the $dbc variable into scope somehow
		$dbc->prepare($offset);
		
		return ($dbc->query("SELECT * FROM national_parks ORDER BY name LIMIT 4 OFFSET $offset")->fetchAll(PDO::FETCH_ASSOC));
	}
//============================================================================
if(!empty($_POST)){
	$national_parks = get_national_parks($dbc,$offset);
	//variables below catch $_POST elements
	// $name = $_POST["name"];
	$location = $_POST["location"];
	// $date_established = $_POST["date_established"];
	$area_in_acres = $_POST["area_in_acres"];
	// $description = $_POST["description"];
	$stmt = $dbc->prepare('INSERT INTO national_parks (name,location,date_established,area_in_acres,description) VALUES (:name,:location,:date_established,:area_in_acres,:description)');
	foreach ($national_parks as $national_park) 
	{
	    // $stmt->bindValue(':name', $name, PDO::PARAM_STR);
	    $stmt->bindValue(':location',  $location,  PDO::PARAM_STR);
	    // $stmt->bindValue(':date_established',  $date_established,  PDO::PARAM_STR);
	    $stmt->bindValue(':area_in_acres',  $area_in_acres,  PDO::PARAM_STR);
	    // $stmt->bindValue(':description',  $description,  PDO::PARAM_STR);
	}
	// $stmt->execute();
}
//THIS IS SOMETHING YOU SHOULDN'T USE ******
// isset($_GET['offset']) ? intval($_GET['offset']) : 0;
$page = get_national_parks($dbc,$offset);
?>

<html>
<head>
	<title>National Parks</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<style type="text/css">
	body{
		background-color: #c3f4ee;
	}
	.myform{
		background-color:#D9F4F4;
		font-family:century gothic;
	}
	
	input{
		background-color: #ECECEC;
	}
	h1{
		font-family: georgia;
	}
	.parks{
		font-family: georgia;

	}
	.ui-widget-header {
	  border: none;
	  background: none;
  
}
	#ui-datepicker-div{
	  font-size: 85%;	
}


	</style>

</head>
<body>
	<h1>National Parks</h1><br>
	<div class="parks">
		 <table class ="table table-striped">
		 	<?php foreach($page as $key => $value): ?>
			  <tr>
			    <td><?php echo $value['name']?></td>
			    <td><?php echo $value['location']?></td>
			    <td><?php echo $value['date_established']?></td>
			    <td><?php echo $value['area_in_acres']?></td>
			    <td><?php echo $value['description'];?></td>
			  </tr>
			 <?php endforeach ?>
			</table> 
			<br>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php if($offset != 0):?>

						<button type='button' class='btn btn-default'><a href='?offset=<?=($offset-4);?>'>PREV</a></button>

						<!-- <button type='button' class='btn btn-default'><a href='$_GET offset=<?=($offset-4);?>'>PREV</a></button> -->

						<?endif;?>
						<?if(($offset+4)<$count):?>
						<button type="button" class="btn btn-default"><a href='?offset=<?=$offset+4;?>'>NEXT</a></button>
						<?endif;?>
					</div>
			</div>
		</div>
		<div class="myform">
			<h1>Add a National Park</h1>
			<form action="reft.php" method="POST">
			Name: <input type="text" required value="<?= isset($_POST['name']) ? $_POST['name'] : ''?>"><br>
			Location: <input type="text" required name="location"><br>
			Date Established: <input type="text" id="datepicker"></br>
			Area in Acres: <input type="number" required name="area_in_acres"><br>
			Description: <input type="text" required name="description"><br>
			<input type="submit">
			</form>
		</div>

	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>
 $(function() {
    $( "#datepicker" ).datepicker();
  });
</script>
</body>
</html>