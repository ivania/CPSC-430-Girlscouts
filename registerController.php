<?php
	include "db_connect.php";
	$error = "?";
	$email = ""; 
	$p1 = "";
	$p2 = "";
	$fn = "";
	$ln = "";
	$dob = "";
	$address = "";
	$street = "";
	$zip = "";
	$phone = "";
	$cell = "";
	echo "8j";
	if($_POST["email"] != "")
	{
		$email = $_POST["email"];
	}
	else 
	{
		$error .= "email&";
	}
	if($_POST["p1"] != "")
	{
		$p1 = $_POST["p1"];
	}
	else 
	{
		$error .= "p1&";
	}
	if($_POST["p2"] != "")
	{
		$p2 = $_POST["p2"];
	}
	else 
	{
		$error .= "p2&";
	}
	if($_POST["fn"] != "")
	{
		$fn = $_POST["fn"];
	}
	else 
	{
		$error .= "fn&";
	}
	if($_POST["ln"] != "")
	{
		$ln = $_POST["ln"];
	}
	else 
	{
		$error .= "ln&";
	}
	
	$dob = "";
	if(isset($_POST["year"]))
	{
		$dob .= $_POST["year"];
	}
	if(isset($_POST["month"]))
	{
		$dob .= "-".$_POST["month"];
	}
	if(isset($_POST["day"]))
	{
		$dob .= "-".$_POST["day"];
	}

	if($_POST["address"]!="")
	{
		$address = $_POST["address"];
	}
	else 
	{
		$error .= "address&";
	}
	if($_POST["street"] != "")
	{
		$street = $_POST["street"];
	}
	else 
	{
		$error .= "street&";
	}
	if($_POST["zip"] != "")
	{
		$zip = $_POST["zip"];
	}
	else
	{
		$error .= "zip&";
	}
	if($_POST["phone"] != "")
	{
		$phone = $_POST["phone"];
	}
	else 
	{
		$error .="phone&";
	}
	if($_POST["cell"] != "")
	{
		$cell = $_POST["cell"];
	}
	else 
	{
		$error .= "cell&";
	}
	if($_POST["daughter"] != "")
	{
		$daugher = $_POST["daughter"];
	}

	if($error != "?")
	{
		header("Location: register.php".$error);
	}
	else 
	{
		$query = "INSERT INTO users (email,password,firstName,lastName,DOB,address,st,zip,phoneNum,cellNum) VALUES ('$email','$p1','$fn','$ln','$dob','$address','$street','$zip','$phone','$cell')";
	
		if($p1 == $p2) 
		{
			if (!mysqli_query($db, $query)) {
    				printf("Errormessage: %s\n", mysqli_error($db));
			}
		}
		$query = "INSERT INTO requests (email,daughter) VALUES ('$email','$daughter');";
		mysqli_query($db, $query);	
		header("Location: login.php");
	}
	?>
