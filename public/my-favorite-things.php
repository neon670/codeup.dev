<?php
	$favoriteThings = ['racquetball', 'food', 'tennis', 'coding', 'yoga','soccer','web design'];

?>



<!DOCTYPE <html>
<head>
	<title>Favortie things</title>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src= "https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src= "https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>




</head>
<body>
	<h1> My Favorite Things </h1>
	<script type="text/javascript">
		$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'excel', 'pdf','csv'
        ]
    } );
} );
	</script>
	 <form action="search.php" method="GET">
        <input type="text" name="query" />
        <input type="submit" value="Search" />
    </form>
	<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
 
        </table>
	<table class="display" id="example" cellspacing="0" width="100%">
		
		<a href="<?php ?>" class="btn btn-default btn-lg" onclick="if (confirm('Are you sure?')) { document.location = this.href; } return false;" id="dialog">Delete</a>
                      <script type="text/javascript">
                      $(function() {
                        $( "#dialog:ui-dialog" ).dialog( "destroy" );

                        $( "#dialog-confirm" ).dialog({
                            resizable: false,
                            height:140,
                            modal: true,
                            buttons: {
                                "Are you sure": function() {
                                                        document.form.submit();
                                    $( this ).dialog( "close" );
                                },
                                Cancel: function() {
                                    $( this ).dialog( "close" );
                                }
                            }
                        });
                    });
                      </script>

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
