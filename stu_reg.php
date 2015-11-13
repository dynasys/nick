<?php
//PROGRAMMED BY: Nicolas Feraud
//ON: 11-5-2015
//NOTES:This script grabs the data from the student registration form.
//If all the fields are filled out and the passwords match, it will insert
//information into the student table and login information the authentication
//table. Last edited on: 11-5-2015
session_start();

if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $username=$_POST['csuser'];
    $password1=$_POST['password1'];
    $password2=$_POST['password2'];
    $email=$_POST['email'];
    $role='s';
    $check = 1;
    
    if($password1 != $password2){
        echo "Passwords do not mach!";
    }
    
    else{  
        $connection = mysql_connect("localhost", "nick", "ayla1234");
        $db = mysql_select_db("csconnect", $connection);
        $query = mysql_query("SELECT * FROM students WHERE username='$username' AND First_Name='$fname' 
                             AND Last_Name='$lname' AND Email='$email'", $connection);
        $rows = mysql_num_rows($query);
    
        if ($rows==1){
            echo "Student already exists in Database.\n";
            echo "Click <a href=\"login.php\">here</a> to return to login page.";
            mysql_close($connection);
        }
        else{
            $db = mysql_select_db("csconnect", $connection);
            //checking if username and pw exist in db
            $sql="INSERT INTO students(username,last_name,first_name,email)
            VALUES('$username','$lname','$fname','$email')";
    
            $sql1="INSERT INTO authentication(username,password,role)
                   VALUES('$username','$password1','$role')";
    
            if (mysql_query($sql,$connection)){
            }
            
            if (mysql_query($sql1,$connection)){
                echo "Registration successful! Click <a href=\"login.php\">here</a> to return to login page.";
            }
    
            mysql_close($connection);
        }
    }
}
?>