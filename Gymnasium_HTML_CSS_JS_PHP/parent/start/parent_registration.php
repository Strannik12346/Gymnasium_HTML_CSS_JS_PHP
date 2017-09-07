<? 
	$parent_surname=$_POST["parent_surname"];
	$parent_name=$_POST["parent_name"];
	$child_surname=$_POST["child_surname"];
	$child_name=$_POST["child_name"];
	$class=$_POST["class"];
	$letter = $_POST["letter"];
	$login=$_POST["login"];
	$password=$_POST["password"];
	$repeatPassword=$_POST["repeatPassword"];
	
	if ($password == $repeatPassword)
	{
		include '../../connect.php';
		$sql = "INSERT INTO parents VALUES ('$parent_surname','$parent_name','$child_surname','$child_name','$class','$letter','$login','$password')";
		$result = mysql_query($sql);
		Header("Location: parent_authorization_page.php");
	}
	else 
	{
		Header("Location: parent_registration_page.php?not_passed=true");		
	}
?>