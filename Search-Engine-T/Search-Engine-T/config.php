<?php 
	$db_name='search_engine';
    $db_host='localhost';
    $db_user='root';
    $db_pass='';
    


    $con=mysqli_connect($db_host,$db_user,$db_pass,$db_name);

    if(!$con){
       echo "Database Connection Error!"; 

    }
?>


