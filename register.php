<style type="text/css">
span
{
	color:#FF0000;
}
</style>

<?php
	include("db_connect.php");
	$ddy = "<select name=\"year\">";
	for($i = 1900; $i < 2012;$i++)
	{
		$ddy .= "<option name=\"$i\">$i</option>";
	}
	$ddy .= "</select>";

	$ddm = "<select name=\"month\">";
	for($i = 1;$i < 13;$i++) 
	{
		$ddm .= "<option name=\"$i\">$i</option>";
	}
	$ddm .= "</option>";
	
	$ddd = "<select name=\"day\">";
	for($i = 1;$i < 32;$i++) 
	{
		$ddd .= "<option name=\"$i\">$i</option>";
	}
	$ddm .= "</option>";	
?>

<form method="post" action="registerController.php">
<table>
	<tr>
		<td><?php if(isset($_GET["email"])) echo "<span>*</span>"; ?>E-Mail</td>
		<td><input type="email" name="email"></td>
	</tr>
	<tr>
		<td><?php if(isset($_GET["p1"])) echo "<span>*</span>"; ?>Password</td>
		<td><input type="password" name="p1"></td>
	</tr>
	<tr>
		<td><?php if(isset($_GET["p2"])) echo "<span>*</span>"; ?>Re-Enter Password</td>
		<td><input type="password" name="p2"></td>
	</tr>
	<tr>
		<td><?php if(isset($_GET["fn"])) echo "<span>*</span>"; ?>First Name</td>
		<td><input type="text" name="fn">
	</tr>
	<tr>
		<td><?php if(isset($_GET["ln"])) echo "<span>*</span>"; ?>Last Name</td>
		<td><input type="text" name="ln">
	</tr>
	<tr>
		<td><?php if(isset($_GET["dob"])) echo "<span>*</span>"; ?>Date of Birth</td>
		<td><?php echo $ddy.$ddm.$ddd;?></td>
	</tr>
	<tr>
		<td><?php if(isset($_GET["address"])) echo "<span>*</span>"; ?>Address</td>
		<td><input type="text" name="address"></td>
	</tr>
	<tr>
		<td><?php if(isset($_GET["street"])) echo "<span>*</span>"; ?>Street</td>
		<td><input type="text" name="street"></td>
	</tr>
	<tr>
		<td><?php if(isset($_GET["zip"])) echo "<span>*</span>"; ?>Zipcode</td>
		<td><input type="text" name="zip"></td>
	</tr>
	<tr>
		<td><?php if(isset($_GET["phone"])) echo "<span>*</span>"; ?>Phone Number (Home)</td>
		<td><input type="text" name="phone"></td>
	</tr>
	<tr>
		<td><?php if(isset($_GET["cell"])) echo "<span>*</span>"; ?>Phone Number (Cell)</td>
		<td><input type="text" name="cell"></td>
	</tr>
	<tr>
		<td>Name of Daughter</td>
		<td><input type="text" name="daughter"></td>
	<tr>
		<td><a href="login.php">Login</a></td>
		<td><input type="submit" value="Register"></td>
	</tr>
</table>
</form>
	