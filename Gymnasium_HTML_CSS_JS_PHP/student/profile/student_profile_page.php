<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="windows-1251" />
	<title> ������ ������� </title>
	<link rel="stylesheet" type="text/css" href="../../styledForms.css">
	<script type="text/javascript" src="../student_script.js" charset="utf-8"> </script>
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
	
	<? 
		$account = $_GET["account"];
		include '../../connect.php';
		$sql = "SELECT * FROM users WHERE username = '$account'";
		$result = mysql_query($sql);
		
		$line = mysql_fetch_row($result);
	?>
  
  	<div id="content">
		<div id="content1"> 
			<div id="formForProfileRedaction">
				<center>
					<b> <font size="5"> ������� ����� ������: </font> </b>
					<form action= <? echo "student_profile.php?account=" . $_GET["account"]; ?> method="post" name="form">
						<table>
							<tr>
								<td align=right> �������: </td>
								<td align=left> <input type="text" name="surname" value= <? echo $line[0]; ?> > </td>
							</tr>
							<tr>
								<td align=right> ���: </td>
								<td align=left> <input type="text" name="name" value= <? echo $line[1]; ?> > </td>
							</tr>
							<tr>
								<td align=right> �����: </td>
								<td align=left> 
									<select name="class"> 
										<option value="5" <? if ($line[2] == 5) {echo "selected";} ?>> 5
										<option value="6" <? if ($line[2] == 6) {echo "selected";} ?>> 6
										<option value="7" <? if ($line[2] == 7) {echo "selected";} ?>> 7
										<option value="8" <? if ($line[2] == 8) {echo "selected";} ?>> 8
										<option value="9" <? if ($line[2] == 9) {echo "selected";} ?>> 9
										<option value="10" <? if ($line[2] == 10) {echo "selected";} ?>> 10
										<option value="11" <? if ($line[2] == 11) {echo "selected";} ?>> 11
									</select>
								</td>
							</tr>
							<tr>
								<td align=right> �����: </td>
								<td align=left> 
									<select name="letter"> 
										<option value="�" <? if ($line[3] == "�") {echo "selected";} ?>> "�"
										<option value="�" <? if ($line[3] == "�") {echo "selected";} ?>> "�"
										<option value="�" <? if ($line[3] == "�") {echo "selected";} ?>> "�"
										<option value="�" <? if ($line[3] == "�") {echo "selected";} ?>> "�"
										<option value="�" <? if ($line[3] == "�") {echo "selected";} ?>> "�"
									</select>
								</td>
							</tr>
							<tr>
								<td align=right> �����: </td>
								<td align=left> <input type="text" name="login" value= <? echo $line[4]; ?> > </td>
							</tr>
							<tr>
								<td align=right> ������: </td>
								<td align=left> <input type="password" name="password" value= <? echo $line[5]; ?> > </td>
							</tr>
							<tr>
								<td align=right> ������ ������: </td>
								<td align=left> <input type="password" name="repeatPassword" value= <? echo $line[5]; ?> > </td>
							</tr>
						</table>
						<input type="submit" name="submit" value="�����������"> <input type="button" onclick="Exit();" value="��������">
					</form>
				</center>
			</div>
			<?
				if (isset($_GET["not_passed"])) 
				{
					$not_passed = $_GET["not_passed"];
					if ($not_passed == true) 
					{
						echo "<h3> ��������, ���� ������ �� �������. ���������� ��� ���. </h3>";
					}
				}
			?>
		</div>
  
		<div id="footer"> �������� ���������� �������� ���� </div>
	</div>
</div>
</body>
</html>