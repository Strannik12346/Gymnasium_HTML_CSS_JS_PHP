<?
	$class = $_POST["class"];
	$letter = $_POST["letter"];
	$surname = $_POST["surname"];
	$marks = $_POST["marks"];
	$subject = array("���.��.","���.���.","�����.��.","�����.���.","����.��.",
					 "����������","�����������","���.��������","����.�������",
					 "���������������","���������","��������","������","����������",
					 "�����","���","����","�����������","��������","��/��");
	include("../../connect.php");
	/*��������� ����� ���������� ������*/
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