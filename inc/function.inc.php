<?php
	
	require_once 'inc/connect.inc.php';

	if(!empty($_POST['type']))
	{
		if ($_POST['type']=='murder')
		{
			$type='murder';
		}
		else if ($_POST['type']=='domestic')
		{
			$type='domestic violence';
		}
		else if($_POST['type']=='sexual')
		{
			$type='sexual harrasment';
		}
		else if($_POST['type']=='assault')
		{
			$type='assault';
		}
		else if($_POST['type']=='theft')
		{
			$type='theft';
		}
	}
	else{$type=$_POST['other'];}
	
	if(!empty($_POST['medical']))
		$medical=1;
	else $medical=0;
	
	if(!empty($_POST['police']))
		$police=1;
	else $police=0;
	
	if(!empty($_POST['counselling']))
		$conselling=1;
	else $counselling=0;
			
	$details=$_POST['details'];
	$name=$_POST['name'];
	$email=$_POST['email'];
			
		    
    if(isset($_POST['submit']))
    {
		$sql = "INSERT INTO fileacomplaint(type, medical, police, counselling, details, name, email) VALUES ('$type','$medical','$police','$counselling','$details','$name','$email')";
		
		if(mysqli_query($link, $sql))
		{
			echo '<script language="javascript">';
			echo 'alert("You have CriedOut for help. We will reach out to you soon.")';
			echo '</script>';				} 
		else
		{
			echo "ERROR: Complaint not received $sql. " . mysqli_error($link);
		}               
	}
	
?>