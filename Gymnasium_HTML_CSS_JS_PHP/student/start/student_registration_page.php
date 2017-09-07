<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="windows-1251" />
	<title> Личный кабинет </title>
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
					<h2> &nbsp; Личный кабинет гимназиста </h2>
				</td>
			</tr>
		</table>
	</div>
	

  
  	<div id="content">
		<div id="content1"> 
			<div id="formForStudentRegistration">
				<center>
					<b> <font size="5"> Зарегистрируйтесь: </font> </b>
					<form action="student_registration.php" method="post" name="form">
						<table>
							<tr>
								<td align=right> Фамилия: </td>
								<td align=left> <input type="text" name="surname"> </td>
							</tr>
							<tr>
								<td align=right> Имя: </td>
								<td align=left> <input type="text" name="name"> </td>
							</tr>
							<tr>
								<td align=right> Класс: </td>
								<td align=left> 
									<select name="class"> 
										<option selected value="5"> 5
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
								<td align=right> Буква: </td>
								<td align=left> 
									<select name="letter"> 
										<option selected value="А"> "А"
										<option value="Б"> "Б"
										<option value="В"> "В"
										<option value="Г"> "Г"
										<option value="Д"> "Д"
									</select>
								</td>
							</tr>
							<tr>
								<td align=right> Логин: </td>
								<td align=left> <input type="text" name="login"> </td>
							</tr>
							<tr>
								<td align=right> Пароль: </td>
								<td align=left> <input type="password" name="password"> </td>
							</tr>
							<tr>
								<td align=right> Повтор пароля: </td>
								<td align=left> <input type="password" name="repeatPassword"> </td>
							</tr>
						</table>
						<input type="submit" name="submit" value="Зарегистрироваться"> <input type="button" onclick="Quit();" value="Отменить">
					</form>
				</center>
			</div>
			<?
				if (isset($_GET["not_passed"])) 
				{
					$not_passed = $_GET["not_passed"];
					if ($not_passed == true) 
					{
						echo "<h3> Возможно, ваши пароли не совпали. Попробуйте еще раз. </h3>";
					}
				}
			?>
		</div>
  
		<div id="footer"> Страницу подготовил Молчанов Иван </div>
	</div>
</div>
</body>
</html>