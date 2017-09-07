<? 
	$account = $_GET["account"];
	$surname = $_POST["surname"];
	$name = $_POST["name"];
	$class = $_POST["class"];
	$letter = $_POST["letter"];
	$login = $_POST["login"];
	$password = $_POST["password"];
	$repeatPassword = $_POST["repeatPassword"];
	
	if ($password == $repeatPassword)
	{
		include '../../connect.php';
		
		$sql = "DELETE FROM users WHERE username = '$account'";
		$result = mysql_query($sql);
		
		$sql = "INSERT INTO users VALUES ('$surname','$name','$class','$letter','$login','$password')";
		$result = mysql_query($sql);
		Header("Location: ../start/student_authorization_page.php");
	}
	else 
	{
		Header("Location: student_profile_page.php?not_passed=true" . "&account=" . $account);		
	}
?>