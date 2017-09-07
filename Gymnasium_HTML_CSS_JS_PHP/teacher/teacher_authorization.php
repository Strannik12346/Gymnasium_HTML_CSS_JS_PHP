<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="windows-1251" />
	<title> Личный кабинет </title>
	<link rel="stylesheet" type="text/css" href="../styledForms.css">
	<script type="text/javascript" src="teacher_script.js" charset="utf-8"> </script>
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
					<img src="../images/Sign.png" class="sign">
				</td>
				<td align=center>
					<h2> &nbsp; Личный кабинет гимназиста </h2>
				</td>
			</tr>
		</table>
	</div>
  
  	<div id="content">
		<div id="content1"> 
			<div id="formForTeacherAuthorization" align=center>
				<center>
					<form name="confirmForm">
						<b> <font size="6"> Выполните вход: </font> </b>
						<br>
						<table>						
							<tr>
								<td align=right> Логин: </td>
								<td align=left> <input type="text" name="accountName" value="teacher"> </td>
							<tr>
							</td>
								<td align=right> Пароль: </td>
								<td align=left> <input type="password" name="accountPassword"> </td>
							</tr>	
					<tr>
						</table>
						<input type="button" class="proveBtn" onclick="proveYourAccount();" value="Подтвердить">
						<input type="button" onclick="mainExit();" value="Выйти">
					</form>
					<br>
				</center>
			</div>
		</div>
  
		<div id="footer"> Страницу подготовил Молчанов Иван </div>
	</div>
</div>
</body>
</html>