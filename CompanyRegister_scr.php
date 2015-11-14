<?php
//code sinppets taken from http://www.formget.com/login-form-in-php/
session_start();
$error= "<b>Username or password is incorrect</b>";//error message
if(isset($_POST['Submit'])){
    
    $cname=$_POST['cname'];
    $repFname=$_POST['repFname'];
    $repLname=$_POST['repLname'];
    $pnumber=$_POST['pnumber'];
    $email=$_POST['email'];
    //$username=$_POST['username'];
    //$password=$_POST['password'];

    $connection = mysql_connect("localhost", "root", "");
    //Security functions
    $cname = stripslashes($cname);
    $repFname = stripslashes($repFname);
    $repLname = stripslashes($repLname);
    $pnumber = stripslashes($pnumber);
    $email = stripslashes($email);
    
    $cname = mysql_real_escape_string($cname);
    $repFname = mysql_real_escape_string($repFname);
    $repLname = mysql_real_escape_string($repLname);
    $pnumber = mysql_real_escape_string($pnumber);
    $email = mysql_real_escape_string($email);
    
    //select db
    $db = mysql_select_db("csconnect", $connection);
    
    //insert company info into database
    $query = "INSERT INTO company (name, rep_first_name, rep_last_name, rep_phone, rep_email) 
    VALUES ('$cname', '$repFname', '$repLname', '$pnumber', '$email')";
    if(mysql_query($query, $connection)){
        echo "Insert Successful";
    }else{
        echo "Insert Failed:" . mysql_error();
    }
        
    mysql_close($connection);
    
}
?>