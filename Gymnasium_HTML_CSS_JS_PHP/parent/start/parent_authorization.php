<? 
	$name = $_POST["clientName"];
	$password = $_POST["clientPassword"];
	include '../../connect.php';
	$sql = "SELECT * FROM parents WHERE username = '$name' AND password = '$password'";
	$result = mysql_query($sql);
	
	if (mysql_num_rows($result) != 0) {
		$line = mysql_fetch_row($result);
		$path = "Location: ../parent_main.php?account=" . $name . "&parent_surname=" . $line[0] . "&parent_name=" . $line[1] . 
																  "&child_surname=" . $line[2] . "&child_name=" . $line[3] . 
																  "&class=" . $line[4] . "&letter=" . $line[5];
		Header($path);
	}
	else {
		Header("Location: parent_authorization_page.php?not_passed=true");
	}
?>