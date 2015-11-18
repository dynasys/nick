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
    $address=$_POST['address'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $zip=$_POST['zip'];
    //$username=$_POST['username'];
    //$password=$_POST['password'];
   //Security functions
    $cname = stripslashes($cname);
    $repFname = stripslashes($repFname);
    $repLname = stripslashes($repLname);
    $pnumber = stripslashes($pnumber);
    $email = stripslashes($email);
    // add address city county zip 
    $address = stripslashes($address);
    $city = stripslashes($city);
    $country = stripslashes($country);
    $zip = stripslashes($zip);
    
    $cname = mysql_real_escape_string($cname);
    $repFname = mysql_real_escape_string($repFname);
    $repLname = mysql_real_escape_string($repLname);
    $pnumber = mysql_real_escape_string($pnumber);
    $email = mysql_real_escape_string($email);
    
    $address = mysql_real_escape_string($address);
    $city = mysql_real_escape_string($city);
    $country = mysql_real_escape_string($country);
    $zip = mysql_real_escape_string($zip);
    $connection = mysql_connect("localhost", "root", ""); 
    //select db
    $db = mysql_select_db("csconnect", $connection);
    
    $query = mysql_query("SELECT * FROM company WHERE name = '$cname' AND rep_first_name = '$repFname'
             AND rep_last_name = '$repLname' AND rep_phone = '$pnumber' AND rep_email = '$email' AND
             Address = '$address' AND City = '$city' AND Country = '$country' AND Zip = '$zip'");
    $rows = mysql_num_rows($query);
    
    if ($rows==1){
        echo "Company already in database.\n If you have already registered before, please wait 
        to be approved by administrator.";
        echo "Click <a href=\"login.php\">here</a> to return to login page.";
        mysql_close($connection); 
    }
    
    else {
        $qry = "INSERT INTO company (name, rep_first_name, rep_last_name, 
                rep_phone, rep_email, Address, City, Country, Zip) 
                VALUES ('$cname', '$repFname', '$repLname', '$pnumber', 
                '$email', '$address', '$city', '$country','$zip')";
        if(mysql_query($qry, $connection)){
            echo "Insert Successful";
        }
        else{
            echo "Insert Failed:" . mysql_error();
        }
        mysql_close($connection);
    }
    
    
    
}
?>