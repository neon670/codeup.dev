<?php
require '../parks_login.php';
// require '../parks_seeder.php';
require '../db_connect.php';
require '../Input.php';
// $offset = isset(_$_GET['offset'] ? intval($_GET['offset']) : 0;
$offset = 0;
$limit =4;
$page =1;

// function getParks($dbc)
// {
//     // Bring the $dbc variable into scope somehow

//     return $dbc->query('SELECT * FROM national_parks limit 0,4 ')->fetchAll(PDO::FETCH_ASSOC);
// }
	if (Input::has('page')) {
        $page = Input::get('page');
        if (is_numeric($page)) {
            $start = ($page - 1) * $limit;
        } 
    }
    
	$stmt = $dbc->prepare("SELECT * FROM national_parks LIMIT :limit OFFSET :offset");
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();

    $parks = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $rows = $dbc->query('SELECT count(*) FROM national_parks')$rows->fetchColumn();
    // $total = ceil($rows/$limit);



// ----------------------------------------------------------------------------------
//form 
	
	$stmt = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
		   VALUES (:name, :location, :date_established, :area_in_acres, :description)";

		$name = Input::get('parkname');
        $location = Input::get('location');
        $date = Input::get('date');
        $area = Input::get('area');
        $description = Input::get('description');

		// $stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
		// $stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
		// $stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);
		// $stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_STR);
		// $stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);
		// $stmt->execute();

 // $parks = getParks($dbc);

?>

<DOCTYPE html>
<head>
	<title>NATIONAL PARKS</title>
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
	
	/*.pagination{
		position: fixed;
		top:0;
		right:5;
		z-index:-5;
		
	}*/
	</style>
</head>
<body>
<h1>National Parks</h1><br>
<div class="parks">
<table class ="table table-striped">

	<tr>
		<th>#</th>
		<th>Park Name</th>
		<th>Location</th>
		<th>Date Established</th>
		<th>Area in Acres</th>
		<th>Description</th>
	</tr>
	<?php foreach($parks as $park): ?>
	<tr>
		<td><?php echo $park['id'];?></td>
		<td><?php echo $park['name'];?></td>
		<td><?php echo $park['location'];?></td>
		<td><?php echo $park['date_established'];?></td>
		<td><?php echo $park['area_in_acres'];?></td>
		<td><?php echo $park['description'];?></td>
	</tr>
	<? endforeach;?>
</table>
</div>
<ul class="pagination">
    	<?php if($offset != 0):?>

		<li><a href="?offset=<?=($offset-4);?>">PREV</a></li>
		 
		<!-- <button type='button' class='btn btn-default'><a href='$_GET offset=<?=($offset-4);?>'>PREV</a></button> -->
		<li><a href="?offset=<?=$offset+4;?>">NEXT</a></li>
		<?endif;?>
		<?if(($offset+4)<$page):?>
		<!-- <li><a href='?offset=<?=$offset+4;?>'>NEXT</a></li> -->
		<?endif;?>
		<li><a href="?page=<?php echo $page+1; ?>">Next</a></li>
  		<li><a href="?offset=<?=$offset+4;?>">NEXT</a></li>
</ul>

<div class="myform">
			<h3>Add A National Park</h3>
			<form action="national_parks.php" method="POST">
			Name: <input type="text"  required name="<?= isset($_POST['name']) ? $_POST['name'] : ''?>"><br>
			Location: <input type="text" required name="location"><br>
			Date Established: <input type="text" id="datepicker"></br>
			<!-- Date Established: <input type="date" required name="date_established"><br> -->
			Area in Acres: <input type="number" required name="area_in_acres"><br>
			 Description: <input type="text" required name="description"><br>
			<input type="submit">
			</form>
</div>
&copy;Noe<?php echo date('Y');?>

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>
 $(function() {
    $( "#datepicker" ).datepicker();
  });
</script>

</body>
</html>


