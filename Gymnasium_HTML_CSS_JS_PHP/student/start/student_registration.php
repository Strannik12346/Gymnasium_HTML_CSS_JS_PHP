<? 
	$surname=$_POST["surname"];
	$name=$_POST["name"];
	$class=$_POST["class"];
	$letter = $_POST["letter"];
	$login=$_POST["login"];
	$password=$_POST["password"];
	$repeatPassword=$_POST["repeatPassword"];
	
	if ($password == $repeatPassword)
	{
		include '../../connect.php';
		$sql = "INSERT INTO users VALUES ('$surname','$name','$class','$letter','$login','$password')";
		$result = mysql_query($sql);
		Header("Location: student_authorization_page.php");
	}
	else 
	{
		Header("Location: student_registration_page.php?not_passed=true");		
	}
?>