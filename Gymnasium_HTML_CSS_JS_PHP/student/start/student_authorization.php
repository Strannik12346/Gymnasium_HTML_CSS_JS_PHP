<? 
	$name = $_POST["clientName"];
	$password = $_POST["clientPassword"];
	include '../../connect.php';
	$sql = "SELECT * FROM users WHERE username = '$name' AND password = '$password'";
	$result = mysql_query($sql);
	
	if (mysql_num_rows($result) != 0) {
		$line = mysql_fetch_row($result);
		$path = "Location: ../student_main.php?account=" . $name . "&surname=" . $line[0] . "&name=" . $line[1] . "&class=" . $line[2] . "&letter=" . $line[3];
		Header($path);
	}
	else {
		Header("Location: student_authorization_page.php?not_passed=true");
	}
?>