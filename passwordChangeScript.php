<?php

if(isset($_POST["submit"])){
	$oldPassword = $_POST["old_password"];
	$NewPassword = $_POST["new_password"];
	$ConfirmPassword = $_POST["confirm_password"];
	//$username = $_SESSION[""]
	
	if($oldPassword == null || $NewPassword == null || $ConfirmPassword == null){
			echo "<br>All fields are required";
	}elseif($NewPassword != $ConfirmPassword){
		echo "<br>Passwords do not match
		<br>Please re-enter passwords";
	}else{
		$connection = mysql_connect("localhost", "root", "");
		$db = mysql_select_db ("csconnect", $connection);
		
		$query = mysql_query("SELECT password
							FROM authentication
							WHERE username='" . $_SESSION['username'] . "'", $connection);
		$row=mysql_fetch_row($query);
		
		
		if($row[0] == $oldPassword){
			/*$sql = 'UPDATE admin
					SET password='.$NewPassword.'
					WHERE username='. $_SESSION['username'].'';*/
			$sql = "UPDATE authentication
					SET password='$NewPassword'
					WHERE username='" . $_SESSION['username'] . "'";

			mysql_query($sql, $connection);		
			
			mysql_close($connection);
			
			echo "<br>password successfully updated!";
		}else{
			echo "<br>Password is incorrect";
		}
	}
}

?>
