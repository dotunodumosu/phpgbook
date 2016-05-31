<form method="post" onsubmit="#"  action="gpost.php">
	<fieldset>
		 Name:<br><input name="name" id="name" type="text" size="20">
		 <br>Email:<br><input name="email" id="email" type="text" size="20">
		<br>Message:<br>
		<textarea name="message" id="message" cols="20" rows="10">  
		</textarea>
		<br><br>
		<input name="submit" type="submit" value="Send">
	</fieldset>
</form>

<?php
	$host="localhost"; 
	$user="user";
	$pass="pass";
	$dbname="database";
	$con=mysqli_connect($host,$user,$pass,$dbname);
	if (mysqli_connect_errno($con))
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	$result = mysqli_query($con,"SELECT * FROM guestbook");
	while($row = mysqli_fetch_array($result))
{ ?>
<div id="post">
	<header><h3><?php echo $row['name']; ?></h3></header>
	<p><?php echo $row['email']; ?></p>
	<p><?php echo $row['message']; ?></p>
</div>

<?php }
   mysqli_close($con);
?>