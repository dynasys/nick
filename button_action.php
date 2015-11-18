<?php
if(isset($_POST['edit'])){
    $JID = $_POST['JID'];
    header("location: job_edit.php?JID=".urlencode("$JID"));
    
}

if(isset($_POST['delete'])){
    $JID = $_POST['JID'];

    
    $connection = mysql_connect("localhost", "root", "");
    $db = mysql_select_db ("csconnect", $connection);
    $sql = "DELETE FROM Jobs WHERE Job_ID = '$JID'";
    $result = mysql_query($sql);
    if ($result){
        echo "Deleted record with job ID $JID";
    }
    else{
        echo "Deletion unsuccessful. Please try again.";
    }
    
    mysql_close($connection);
}
?>
