function proveYourAccount()
{
	var name = document.confirmForm.accountName.value;
	var password = document.confirmForm.accountPassword.value;
	if ((name == 'teacher') && (password == '1234'))
	{
		window.location.href = "pages/teacher_events.php?account_confirmed=true";
	}
	else
	{
		alert('Возможно, вы ввели неверные данные!');
	}
}
function Exit()
{
 window.location.href = "../../index.php";
}
function mainExit()
{
 window.location.href = "../index.php";
}