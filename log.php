<?php
//code sinppets taken from http://www.formget.com/login-form-in-php/
session_start();
$error= "<b>Username or password is incorrect</b>";//error message
if(isset($_POST['login'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];

    $connection = mysql_connect("localhost", "root", "");
    //Security functions
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);
    //select db
    $db = mysql_select_db("csconnect", $connection);
    //checking if username and pw exist in db
    $query = mysql_query("SELECT * FROM authentication WHERE password='$password' AND username='$username'", $connection);
    $role_quer = mysql_query("SELECT role FROM authentication WHERE password='$password' AND username='$username'", $connection);
    $role_row = mysql_fetch_row($role_quer);
    $role = $role_row[0];
    $rows = mysql_num_rows($query); 
    
    if ($rows==1){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['role'] = $role;
        if($role == 's')
            header("location: stu_home.php");
        if($role == 'c'){
            $cid_quer = mysql_query("SELECT Company_ID FROM company WHERE username='$username'");
            $cid_row = mysql_fetch_row($cid_quer);
            $companyID = $cid_row[0];
            $_SESSION['companyID'] = $companyID;
            header("location: comp_home.php");
        }
    }
    else {
        echo $error;
    }
        
    mysql_close($connection);
    
}
?>