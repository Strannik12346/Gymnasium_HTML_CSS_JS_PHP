<?
	$class = $_POST["class"];
	$letter = $_POST["letter"];
	$surname = $_POST["surname"];
	$marks = $_POST["marks"];
	$subject = array("Бел.яз.","Бел.лит.","Русск.яз.","Русск.лит.","Англ.яз.",
					 "Математика","Информатика","Ист.Беларуси","Всем.история",
					 "Обществоведение","География","Биология","Физика","Астрономия",
					 "Химия","ИЗО","Труд","Физкультура","Черчение","ДП/МП");
	include("../../connect.php");
	/*Замещение ранее записанных оценок*/
	$sql = "DELETE FROM marks WHERE class='$class' AND letter='$letter' AND surname='$surname'";
	$result = mysql_query($sql);
	$i = 0;
	while(isset($marks[$i]))
	{
		$sql = "INSERT INTO marks VALUES ('$class','$letter','$surname','$subject[$i]','$marks[$i]')";
		$result = mysql_query($sql) or die("Insert query failed");
		Header("Location: ../pages/teacher_marks.php?account_confirmed=true");
		$i++;
	}
?>