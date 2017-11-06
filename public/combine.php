
  
<?php
    $states = array("Texas" => array
    ( "population" => "11,350,000", "captial" => "Austin"),
    "California" => array( "population" => "17,90,000",
    "captial" => "Sacramento") );
    echo $states["Texas"]["population"];
    
    ?>

<?php
    $state = array ("Tennesse", "New York", "Texas",
    "California");
    echo (array_search ("Texas", $state) );
    ?>
<br>    
  <?php
    $fruits = array ("apple", "orange", "banana");
    echo (next($fruits));
    echo (next($fruits));
    ?>

<br>


    <?php
    $num  = 1;
    $num1 = 2;
    print $num . "+". $num1;
    ?>

<br>
