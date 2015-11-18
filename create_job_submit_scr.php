<?php
if(isset($_POST['submit'])){
    $Title = $_POST['title'];
    $Position = $_POST['position'];
    $Type = $_POST['select'];
    $Salary = $_POST['salary'];
    $City = $_POST['city'];
    $State = $_POST['state'];
    $Url = $_POST['url'];
    $Description = $_POST['description'];
    $Basiq = $_POST['basiq'];
    $Prefq = $_POST['prefq'];
   // $JID = $_GET['JID'];
    $CID = $_SESSION['companyID'];
    $Name = $_SESSION['compname'];
    
   
    $connection = mysql_connect("localhost", "root", "");
    $db = mysql_select_db ("csconnect", $connection);
    $sql = "INSERT INTO jobs(Title, Position_title, Type, Salary, City, State, url,
            Description, Basic_Qual, Pref_Qual,Company_ID, name)
            VALUES('$Title', '$Position','$Type','$Salary','$City','$State',
                   '$Url', '$Description','$Basiq','$Prefq', '$CID','$Name')";
    if (mysql_query($sql,$connection)){
        echo "Record updated! Click <a href='comp_home.php'>here</a> to return to view updated records";
    }

    else{
        echo "Error uploading data.";
    }
    
    mysql_close($connection);
}

if(isset($_POST['cancel'])){
    echo"hello world";
    header("location:comp_home.php");
}
?>
