<?php

	$favoriteThings = ['racquetball', 'food', 'tennis', 'coding', 'yoga','soccer','web design'];



?>

<!DOCTYPE <html>
<head>
	<title>print</title>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
<script type="text/javascript" src= "https://code.jquery.com/jquery-1.12.4.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">
<script type="text/javascript" src= "https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>




<script type="text/javascript">
    $(document).ready(function() {
    $('#content').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
</head>
<body>
<p>hello this is a paragraph</p>


<table class="table" id="content">
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
            <td>Garrett Winters</td>
            <td>Director</td>
            <td>Edinburgh</td>
            <td>63</td>
            <td>2011/07/25</td>
            <td>$5,300</td>
          </tr>
          <tr>
            <td>Ashton Cox</td>
            <td>Technical Author</td>
            <td>San Francisco</td>
            <td>66</td>
            <td>2009/01/12</td>
            <td>$4,800</td>
          </tr>
          <tr>
            <td>Cedric Kelly</td>
            <td>Javascript Developer</td>
            <td>Edinburgh</td>
            <td>22</td>
            <td>2012/03/29</td>
            <td>$3,600</td>
          </tr>
          <tr>
            <td>Jenna Elliott</td>
            <td>Financial Controller</td>
            <td>Edinburgh</td>
            <td>33</td>
            <td>2008/11/28</td>
            <td>$5,300</td>
          </tr>
<tr>
            <td>Jenna Elliott</td>
            <td>Financial Controller</td>
            <td>Edinburgh</td>
            <td>33</td>
            <td>2008/11/28</td>
            <td>$5,300</td>
          </tr>
          <tr>
            <td>Jenna Elliott</td>
            <td>Financial Controller</td>
            <td>Edinburgh</td>
            <td>33</td>
            <td>2008/11/28</td>
            <td>$5,300</td>
          </tr>

   
     
<tr>
     <?php foreach ($favoriteThings as $favoriteThing) { ?>
	      <td><?php echo $favoriteThing ?></td>
	    <?php } ?>
</tr>
</table>

</body>
</html>