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
				<form method="post" action="../process/teacher_events_add.php">
					<h2 class="h2x"> ���������� �������: </h2>
					<table border=0>
						<tr>
							<td align=right> ����: </td>
							<td align=left> <input type="text" name="date"> </td>
						<tr>
						<tr>
							<td align=right> �������: </td>
							<td align=left> <input type="text" name="event"> </td>
						</tr>
						<tr>
							<td align=right> ������: </td>
							<td align=left> 
								<select name="class"> 
									<option selected value="all"> ���
									<option value="5"> 5
									<option value="6"> 6
									<option value="7"> 7
									<option value="8"> 8
									<option value="9"> 9
									<option value="10"> 10
									<option value="11"> 11
								</select>
							</td>
						</tr>
						<tr>
							<td align=right> </td>
							<td align=left> <input type="submit" name="addEvent" value="���������"> </td>
						</tr>
					</table>
				</form>
				<form method="post" action="../process/teacher_events_delete.php">
					<h2 class="h2x"> �������� �������: </h2>
					<table class="styledTable" border = 1 width = 50%>
						<tr align=center>
							<td width = 9%> <b> ���� </b> </td>
							<td width = 29%> <b> ������� </b> </td>
							<td width = 10%> <b> ������ </b> </td>
							<td width = 2%> </td>
						</tr>
				
						<?
							include('../../connect.php');
							$result = mysql_query("SELECT * FROM events");
    
							while ($line = mysql_fetch_row($result)) 
							{ 
								print "<tr align=\"center\"> <td> $line[1] </td>";
								print "<td> $line[2] </td>";
								print "<td> $line[3] </td>";
								print "<td>";
								$eventID = $line[0];
						?>
							<input type=checkbox name=box[] value="<?php echo $eventID ?>" >
						<? print "</td> </tr>"; 
							} 
						?>
					</table>
					<p> </p>
					<p class="submitter"> ������� ���������: <input type=submit name="deleteSelected" value="�����������"> &nbsp; <input type="button" value="�����" onclick="Exit()"> </p>
				</form>
			</center>
		</div>
  
		<div id="footer"> �������� ���������� �������� ���� </div>
	</div>
</div>
</body>
</html>
