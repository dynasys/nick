<style>
    h3{
       padding-top: 0%;
       padding-bottom:0%;
       padding-left:38%;
    }
</style>
<?php
    $connection = mysql_connect("localhost", "root", "");
    $db = mysql_select_db("csconnect", $connection);
    $query= mysql_query("SELECT * FROM jobs"); 
    while($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
        echo '<h3>' . $row["Position_title"]. '</h3>';
        echo '<b>Job ID:</b> ' . $row["Job_ID"] . '&nbsp; &nbsp;';
        echo '<b>Posted on:</b> ' . $row["Post_Date"]. '&nbsp;&nbsp; ';
        echo '<b>Company Name:</b> ' . $row["name"] . '<br>';
           
        echo '<b>Type:</b> ' .$row["Type"]. '&nbsp;&nbsp;';
        echo '<b>Salary:</b> ' .$row["Salary"]. '<br>';
        echo '<b>City:</b> ' .$row["City"]. '<br>';
        echo '<b>Basic Qualifications:</b> ' .$row["Basic_Qual"]. '<br>';
        echo '<b>Preffered Qualifications:</b> ' .$row["Pref_Qual"]. '<br>'; 
        echo '<hr>';
    }
?>