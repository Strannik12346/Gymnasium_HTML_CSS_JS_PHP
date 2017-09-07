<?php
	if(isset($_POST["box"])) { 
		$toDelete = $_POST["box"];
		$i = 0;
		while(isset($toDelete[$i])) {
			include '../../connect.php';
			$sql="DELETE FROM events WHERE id='$toDelete[$i]'";
			$result = mysql_query($sql) or die("Query failed");
			$i++;
		}
	}
	Header("Location: ../pages/teacher_events.php?account_confirmed=true");
?>