 <?
	$class = $_POST["class"];
	$letter = $_POST["letter"];
	$subject = $_POST["subject"];
	$task = $_POST["task"];
	/* З‡амещение ранее записанного домашнего задания */
	include '../../connect.php';
	$sql = "DELETE FROM tasks WHERE class='$class' AND letter='$letter' AND subject='$subject'";
	$result = mysql_query($sql);
	$sql = "INSERT INTO tasks VALUES ('$class','$letter','$subject','$task')";
	$result = mysql_query($sql) or die("Insert query failed");
	Header("Location: ../pages/teacher_tasks.php?account_confirmed=true");
 ?>