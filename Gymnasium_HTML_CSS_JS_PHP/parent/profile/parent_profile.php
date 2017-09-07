<? 
	$account = $_GET["account"];
	$surname = $_POST["parent_surname"];
	$name = $_POST["parent_name"];
	$surname = $_POST["child_surname"];
	$name = $_POST["child_name"];
	$class = $_POST["class"];
	$letter = $_POST["letter"];
	$login = $_POST["login"];
	$password = $_POST["password"];
	$repeatPassword = $_POST["repeatPassword"];
	
	if ($password == $repeatPassword)
	{
		include '../../connect.php';
		
		$sql = "DELETE FROM parents WHERE username = '$account'";
		$result = mysql_query($sql);
		
		$sql = "INSERT INTO parents VALUES ('$parent_surname','$parent_name','$child_surname','$child_name','$class','$letter','$login','$password')";
		$result = mysql_query($sql);
		Header("Location: ../start/parent_authorization_page.php");
	}
	else 
	{
		Header("Location: parent_profile_page.php?not_passed=true" . "&account=" . $account);		
	}
?>