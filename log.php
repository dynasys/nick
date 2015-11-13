<?php
//code sinppets taken from http://www.formget.com/login-form-in-php/
session_start();
$error= "<b>Username or password is incorrect</b>";//error message
if(isset($_POST['login'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];

    $connection = mysql_connect("localhost", "nick", "ayla1234");
    //Security functions
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);
    //select db
    $db = mysql_select_db("csconnect", $connection);
    //checking if username and pw exist in db
    $query = mysql_query("SELECT * FROM authentication WHERE password='$password' AND username='$username'", $connection);
    $rows = mysql_num_rows($query);
    
    if ($rows==1){
        header("location: home.php");
    }
    else {
        echo $error;
    }
        
    mysql_close($connection);
    
}
?>