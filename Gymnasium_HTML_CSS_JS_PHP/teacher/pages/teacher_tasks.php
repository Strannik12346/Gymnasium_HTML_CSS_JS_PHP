<?
	if ($_GET['account_confirmed'] != true) {
		Header("Location: ../teacher_authorization.php");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="windows-1251" />
	<title> ������ ������� </title>
	<link rel="stylesheet" type="text/css" href="../../style.css">
	<script type="text/javascript" src="../teacher_script.js"> </script>
</head>

<body>
<div id="main">
	<div id="header">
		<table align=center>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
			</tr>
			<tr>
				<td align=center>
					<img src="../../images/Sign.png" class="sign">
				</td>
				<td align=center>
					<h2> &nbsp; ������ ������� ���������� </h2>
				</td>
			</tr>
		</table>
	</div>
	
	<div id="menu">
		<a href="teacher_events.php?account_confirmed=true"> <div id="teacherlink1"> �������������� ������� </div> </a>
		<a href="teacher_marks.php?account_confirmed=true"> <div id="teacherlink2"> �������������� ������ </div> </a> 
		<a href="teacher_tasks.php?account_confirmed=true"> <div id="teacherlink3"> �������������� ������� </div> </a>
	</div>
  
  	<div id="contentBig">
		<div id="content1Big"> 
			<center>
				<h2 class="h2x"> ���������� �������: </h2>
				<form method="post" action="../process/teacher_tasks_add.php">
					<table border=0 width=40%>
						<tr>
							<td align=right> �����: </td>
							<td align=left>						
								<select name="class">
									<option selected value=5> 5
									<option value=6> 6
									<option value=7> 7
									<option value=8> 8
									<option value=9> 9
									<option value=10> 10
									<option value=11> 11
								</select>
							<td align=left>
								<select name="letter">
									<option selected value="�"> �
									<option value="�"> �
									<option value="�"> �
									<option value="�"> �
									<option value="�"> �
								</select>
							</td>
							<td align=right> �������: </td>
							<td align=left>						
								<select name="subject" class="bigComboBox">
									<option selected value="���.��."> ���.��.
									<option value="���.���."> ���.���.
									<option value="�����.��."> �����.��.
									<option value="�����.���."> �����.���.
									<option value="����.��."> ����.��.
									<option value="����������"> ����������
									<option value="�����������"> �����������
									<option value="���.��������"> ���.��������
									<option value="����.�������"> ����.�������
									<option value="���������������"> ���������������
									<option value="���������"> ���������
									<option value="��������"> ��������
									<option value="������"> ������
									<option value="����������"> ����������
									<option value="�����"> �����
									<option value="���"> ���
									<option value="����"> ����
									<option value="�����������"> �����������
									<option value="��������"> ��������
									<option value="��/��"> ��/��
								</select>
							</td>
						</tr>
						<tr>
						</tr>
						<tr>
							<td align=right> �������: </td>
							<td align=right colspan=4> 
								<input type="text" name="task" class="bigText">
							</td>
						</tr>
						<tr>
							<td align=right colspan=5> 
								<input type="submit" value="��������"> &nbsp; <input type="button" value="�����" onclick="Exit()">
							</td>
						</tr>
					</table>
				</form>
				<br>
				<h2 class="h2x"> �������� �������: </h2>
				<form method="post" action="teacher_tasks.php?account_confirmed=true">
					<table border=0>
						<tr>
							<td align=right> �������� �����: </td>
							<td align=left> 
								<select name="class">
									<option selected value=5> 5
									<option value=6> 6
									<option value=7> 7
									<option value=8> 8
									<option value=9> 9
									<option value=10> 10
									<option value=11> 11
								</select> 
							</td>
							<td align=left> 
								<select name="letter">
									<option selected value="�"> �
									<option value="�"> �
									<option value="�"> �
									<option value="�"> �
									<option value="�"> �
								</select>
							</td>
							<td align=right> <input type="submit" value="�����������"> </td>
						</tr>
					</table>
				</form>
				<?
					$subjects = array("���.��.","���.���.","�����.��.","�����.���.",
									  "����.��.","����������","�����������","���.��������",
									  "����.�������","���������������","���������","��������",
									  "������","����������","�����","���","����","�����������",
									  "��������","��/��");
					$style = "styledTable";
					if (isset($_POST["class"]) && isset($_POST["letter"]))
					{
						echo "<table> <tr> </tr> </table>
						<table class=$style border = 1 width = 60%>
							<tr align=center>
								<td width = 33%> <b> ������� </b> </td>
								<td width = 66%> <b> �������� ������� </b> </td>
							</tr>";
							$class = $_POST["class"];
							$letter = $_POST["letter"];
							include('../../connect.php');
							for ($i = 0; $i <= 19; $i++)
							{
								$result = mysql_query("SELECT * FROM tasks WHERE class='$class' AND letter='$letter' AND subject='$subjects[$i]'");
								while ($line = mysql_fetch_row($result))
								{
									print "<tr align=\"left\"> <td> &nbsp; $line[2] </td>";
									print "<td> &nbsp; $line[3] </td>";
									print "</tr>"; 
								}
							}
						echo "</table>";
					}
				?>	
			</center>
		</div>
  
		<div id="footer"> �������� ���������� �������� ���� </div>
	</div>
</div>
</body>
</html>