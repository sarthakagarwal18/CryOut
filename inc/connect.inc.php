<?php
	$host_name='localhost';
    $username='root';
    $password='';
    $db_name='cryout';
    $link = mysqli_connect($host_name, $username, $password, $db_name);
    // Check connection
    if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
        }
?>