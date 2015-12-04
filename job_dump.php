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
        $JID=$row["Job_ID"];
        echo '<tr>
                <td>'.$row["name"].'</td>
                <td>'.$row["Title"].'</td>
                <td>'.$row["Position_title"].'</td>
                <td>'.$row["City"].','.$row["State"].'</td>
                <td>'.$row["Salary"].'</td> 
                <td>'.$row["Post_Date"].'</td>
                <form method="post" action="view_button_scr.php">
                    <input type="hidden" name="JID" value="'.$JID.'">
                    <td><input type="submit" value="view" name="view">
                    </form>
            </tr>';
                    
    }
?>