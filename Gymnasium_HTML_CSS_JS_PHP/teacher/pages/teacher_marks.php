<?
	if ($_GET['account_confirmed'] != true) {
		Header("Location: ../teacher_authorization.php");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="windows-1251" />
	<title> Личный кабинет </title>
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
					<h2> &nbsp; Личный кабинет гимназиста </h2>
				</td>
			</tr>
		</table>
	</div>
	
	<div id="menu">
		<a href="teacher_events.php?account_confirmed=true"> <div id="teacherlink1"> Редактирование событий </div> </a>
		<a href="teacher_marks.php?account_confirmed=true"> <div id="teacherlink2"> Редактирование оценок </div> </a> 
		<a href="teacher_tasks.php?account_confirmed=true"> <div id="teacherlink3"> Редактирование заданий </div> </a>
	</div>
	
	<div id="contentBig">
		<div id="content1Big"> 
			<center>
				<h2 class="h2x"> Добавление оценок: </h2>
				<form method="post" action="../process/teacher_marks_add.php">
					<table border=0>
						<tr>
							<td align=right> Класс: </td>
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
								<select name="letter">
									<option selected value="А"> А
									<option value="Б"> Б
									<option value="В"> В
									<option value="Г"> Г
									<option value="Д"> Д
								</select>
							</td>
							<td align=right> Бел.яз: </td>
							<td align=left> <input type="text" name=marks[]> &nbsp; </td>
							<td align=right> Бел.лит: </td>
							<td align=left>	<input type="text" name=marks[]> </td>
						</tr>
						<tr>
							<td align=right> Фамилия: </td>
							<td align=left>						
								<input type="text" name="surname" class="smallText"> 
							</td>
							<td align=right> Русск.яз: </td>
							<td align=left>	<input type="text" name=marks[]> </td>
							<td align=right> Русск.лит: </td>
							<td align=left>	<input type="text" name=marks[]> </td>
						</tr>
						<tr>
							<td align=right> Добавить: </td>
							<td align=left> <input type="submit" value="Подтвердить"> </td>
							<td align=right> Англ.яз: </td>
							<td align=left>	<input type="text" name=marks[]> </td>
							<td align=right> Математика: </td>
							<td align=left>	<input type="text" name=marks[]> </td>
						</tr>
						<tr>
							<td align=right> </td>
							<td align=left> <input type="button" value="Выйти" onclick="Exit()"> </td>
							<td align=right> Информатика: </td>
							<td align=left>	<input type="text" name=marks[]> </td>
							<td align=right> Ист.Беларуси: </td>
							<td align=left>	<input type="text" name=marks[]> </td>
						</tr>
						<tr>
							<td align=right> </td>
							<td align=left> </td>
							<td align=right> Всем.история: </td>
							<td align=left>	<input type="text" name=marks[]> </td>
							<td align=right> Общество: </td>
							<td align=left>	<input type="text" name=marks[]> </td>
						</tr>
						<tr>
							<td align=right> </td>
							<td align=left> </td>
							<td align=right> География: </td>
							<td align=left>	<input type="text" name=marks[]> </td>
							<td align=right> Биология: </td>
							<td align=left>	<input type="text" name=marks[]> </td>
						</tr>
						<tr>
							<td align=right> </td>
							<td align=left> </td>
							<td align=right> Физика: </td>
							<td align=left>	<input type="text" name=marks[]> </td>
							<td align=right> Астрономия: </td>
							<td align=left>	<input type="text" name=marks[]> </td>
						</tr>
						<tr>
							<td align=right> </td>
							<td align=left> </td>
							<td align=right> Химия: </td>
							<td align=left>	<input type="text" name=marks[]> </td>
							<td align=right> ИЗО: </td>
							<td align=left>	<input type="text" name=marks[]> </td>
						</tr>
						<tr>
							<td align=right> </td>
							<td align=left> </td>
							<td align=right> Труд: </td>
							<td align=left>	<input type="text" name=marks[]> </td>
							<td align=right> Физкультура: </td>
							<td align=left>	<input type="text" name=marks[]> </td>
						</tr>
						<tr>
							<td align=right> </td>
							<td align=left> </td>
							<td align=right> Черчение: </td>
							<td align=left>	<input type="text" name=marks[]> </td>
							<td align=right> ДП/МП: </td>
							<td align=left>	<input type="text" name=marks[]> </td>
						</tr>
					</table>
				</form>
			</center>
		</div>
  
		<div id="footer"> Страницу подготовил Молчанов Иван </div>
	</div>
</div>
</body>
</html>