<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="windows-1251" />
	<title> ������ ������� </title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<script type="text/javascript" src="../jquery.js"> </script>
	<script type="text/javascript" src="parent_script.js"> </script>
</head>

<body>
<div id="main">
	<div id="header">
		<table align=center>
			<tr>
				<td align=center>
					<img src="../images/Sign.png" class="sign">
				</td>
				<td align=center>
					<h2> &nbsp; ������ ������� ���������� </h2>
				</td>
			</tr>
		</table>
		<p class="profile" align=right> �� ����� ��� ����� <? echo $_GET["account"]; ?> (��� ��������). &nbsp;
		<input type="button" value="�����" onclick="mainExit()"> </p>
	</div>
	<div id="menu">
		<a href="javascript:Effect1();"> <div id="link1"> ������� </div> </a>
		<a href="javascript:Effect2();"> <div id="link2"> ������� </div> </a> 
		<a href="javascript:Effect3();"> <div id="link2"> ����������� </div> </a>
		<a href="javascript:Effect4();"> <div id="link2"> ������ </div> </a> 
		<a href="javascript:Effect5();"> <div id="link3"> ���.������� </div> </a>
	</div>
	<div id="content">
		<div id="content1"> 
			<center>
				<h2> ������� </h2> 
				<p align=left class="mainText"> 
					<font size=4> 
						��� ������ ������������� ��� ��� ����������, ���������� �������� ����� ������ �������.
						������ �� ����� ��� �������� ��� ����� <? echo $_GET["account"]; ?>. ����� ���� 
						������� �� ������: 
					</font>
				</p> 
				<font size=4>
					<ul type=round class="mainUl">
						<li align=left> �������� ���������� � ��������� ������������ � ����� </li>
						<li align=left> ������������� ������� ������ ������ ������� </li>
						<li align=left> �������� �������� �������, �������� ������ ������� </li>
						<li align=left> �������� ���� ������� </li>
					</ul>
				</font>
			</center> 
		</div>
		
		<div id="content2">	
			<center>
				<h2> ��� ������� </h2>
				<table border=0>
					<tr>
						<td align=right> ���� �������: </td>
						<td align=left> &nbsp; <? echo $_GET["parent_surname"]; ?> </td>
					</tr>
					<tr>
						<td align=right> ���� ���: </td>
						<td align=left> &nbsp; <? echo $_GET["parent_name"]; ?> </td>
					</tr>
										<tr>
						<td align=right> ������� ������ �������: </td>
						<td align=left> &nbsp; <? echo $_GET["child_surname"]; ?> </td>
					</tr>
					<tr>
						<td align=right> ��� ������ �������: </td>
						<td align=left> &nbsp; <? echo $_GET["child_name"]; ?> </td>
					</tr>
					<tr>
						<td align=right> ����� ������ �������: </td>
						<td align=left> &nbsp; <? echo $_GET["class"]; ?> "<? echo $_GET["letter"]; ?>" </td>
					</tr>
					<tr>
						<td align=right> ��� �����: </td>
						<td align=left> &nbsp; <? echo $_GET["account"]; ?> </td>
					</tr>
				</table>
				<? 
					$href = "profile/parent_profile_page.php?account=" . $_GET["account"];
				?>
				<br> ���� �� ������ �������� ������ �������, �� <br> ��������� �� ������: <a href=<? echo $href; ?> > �������������� ������� </a>
			</center>
		</div>
  
		<div id="content3"> 
			<center>
				<h2> �������� ����������� </h2>
				<font size=5> ������������ �����������: </font>
				<table> <tr> </tr> </table>
				<table class="styledTable" border = 1 width = 50%>
					<tr align=center>
						<td width = 25%> <b> ���� </b> </td>
						<td width = 75%> <b> ������� </b> </td>
					</tr>
					<?
						include('../connect.php');
						$result = mysql_query("SELECT * FROM events WHERE class='all'");
						while ($line = mysql_fetch_row($result))
						{
							print "<tr align=\"center\"> <td> $line[1] </td>";
							print "<td> $line[2] </td>";
							print "</tr>"; 
						}
					?>
				</table>
				<?
					if (isset($_GET["class"]))
					{
						$style = "styledTable";
						echo "<br> 
						<font size=5> ����������� ����� ���������: </font>
						<table> <tr> </tr> </table>
						<table class=$style border = 1 width = 50%>
							<tr align=center>
								<td width = 25%> <b> ���� </b> </td>
								<td width = 75%> <b> ������� </b> </td>
							</tr>";
							$class = $_GET["class"];
							include('../connect.php');
							$result = mysql_query("SELECT * FROM events WHERE class=$class");
							while ($line = mysql_fetch_row($result)) 
							{ 
								print "<tr align=\"center\"> <td> $line[1] </td>";
								print "<td> $line[2] </td>";
								print "</tr>"; 
							} 
						echo "</table>";
					}
				?>
			</center>
		</div>
  
		<div id="content4"> 
			<center>
				<h2> ������ </h2>
				<?
					$subjects = array("���.��.","���.���.","�����.��.","�����.���.",
									  "����.��.","����������","�����������","���.��������",
									  "����.�������","���������������","���������","��������",
									  "������","����������","�����","���","����","�����������",
									  "��������","��/��");
					$style = "styledTable";
					if (isset($_GET["class"]) && isset($_GET["letter"]) && isset($_GET["child_surname"]))
					{
						echo "<font size=5> ���� ������ �� ���� ���������: </font>
						<table> <tr> </tr> </table>
						<table class=$style border = 1 width = 60%>
							<tr align=center>
								<td width = 33%> <b> ������� </b> </td>
								<td width = 66%> <b> ������ </b> </td>
							</tr>";
							$class = $_GET["class"];
							$letter = $_GET["letter"];
							$surname = $_GET["child_surname"];
							include('../connect.php');
							for ($i = 0; $i <= 19; $i++)
							{
								$result = mysql_query("SELECT * FROM marks WHERE class='$class' AND letter='$letter' AND surname='$surname' AND subject = '$subjects[$i]'");
								while ($line = mysql_fetch_row($result))
								{
									print "<tr align=\"left\"> <td> &nbsp; $line[3] </td>";
									print "<td> &nbsp; $line[4] </td>";
									print "</tr>"; 
								}
							}
						echo "</table>";
					}
				?>
			</center>
		</div>
  
		<div id="content5"> 
			<center>
				<h2> �������� ������� </h2>
				<?
					$subjects = array("���.��.","���.���.","�����.��.","�����.���.",
									  "����.��.","����������","�����������","���.��������",
									  "����.�������","���������������","���������","��������",
									  "������","����������","�����","���","����","�����������",
									  "��������","��/��");
					$style = "styledTable";
					if (isset($_GET["class"]) && isset($_GET["letter"]))
					{
						echo "<font size=5> �������� ������� ������ ������: </font>
						<table> <tr> </tr> </table>
						<table class=$style border = 1 width = 60%>
							<tr align=center>
								<td width = 33%> <b> ������� </b> </td>
								<td width = 66%> <b> �������� ������� </b> </td>
							</tr>";
							$class = $_GET["class"];
							$letter = $_GET["letter"];
							include('../connect.php');
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