<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="windows-1251" />
	<title> Личный кабинет </title>
	<link rel="stylesheet" type="text/css" href="../../styledForms.css">
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
					<h2> &nbsp; Личный кабинет гимназиста </h2>
				</td>
			</tr>
		</table>
	</div>
  
  	<div id="content">
		<div id="content1"> 
			<div id="formForStudentAuthorization" align=center>
				<center>
					<b> <font size="6"> Выполните вход: </font> </b>
					<table>
						<form action="parent_authorization.php" method="post" name="authorizationForm">
							<tr>
								<td align=right> Имя пользователя: </td>
								<td align=left> <input type="text" name="clientName"> </td>
							</tr>
							<tr>
								<td align=right> Пароль: </td>
								<td align=left> <input type="password" name="clientPassword"> </td>
							</tr>
							<tr>
								<td align=right> <input type="submit" class="submitBtn1" value="Войти"> </td>
						</form>
						<form action="parent_registration_page.php" method="post" name="registrationForm">
								<td align=left> <input type="submit" class="submitBtn2" value="Зарегистрироваться"> </td>
							</tr>
						</form>
					</table>
				</div>
				<?
					if (isset($_GET["not_passed"])) 
					{
						$not_passed = $_GET["not_passed"];
						if ($not_passed == true)
						{
							echo "<h3> Возможно, вы ввели неверные данные. Попробуйте еще раз. </h3>";
						}
					}
				?>
			</center>
		</div>
  
		<div id="footer"> Страницу подготовил Молчанов Иван </div>
	</div>
</div>
</body>
</html>