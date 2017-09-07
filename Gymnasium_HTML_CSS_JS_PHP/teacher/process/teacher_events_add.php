 <?
	include '../../connect.php';

	$sql = "SELECT MAX(id) FROM events";
	$result = mysql_query($sql) or die("Select query failed");
	$row = mysql_fetch_row($result);
	$id = $row[0] + 1;
	
	$date = $_POST["date"];
	$event = $_POST["event"];
	$class = $_POST["class"];

	$sql = "INSERT INTO events VALUES ('$id','$date','$event','$class')";
	$result = mysql_query($sql) or die("Insert query failed");
	Header("Location: ../pages/teacher_events.php?account_confirmed=true");
 ?>