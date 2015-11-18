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
    $JID = $_GET['JID'];
    $CID = $_SESSION['companyID'];
    $Name = $_SESSION['compname'];
    
   
    $connection = mysql_connect("localhost", "root", "");
    $db = mysql_select_db ("csconnect", $connection);
    $sql = "UPDATE jobs
            SET Title='$Title',
            Position_title='$Position',
            Type='$Type',
            Salary='$Salary',
            City='$City', 
            State='$State',
            url='$Url',
            Description='$Description',
            Basic_Qual='$Basiq',            
            Pref_Qual='$Prefq',
            Company_ID='$CID',
            name='$Name'
            WHERE Job_ID='$JID'";
            
    if (mysql_query($sql,$connection    )){
       header("location: comp_home.php");
    }

    else{
        mysql_error($sql);
    }
    
    mysql_close($connection);
}

if(isset($_POST['cancel'])){
    echo"hello world";
    header("location:comp_home.php");
}
?>