<?php
// populate table with all jobs
//session_start();
//$error= "<b>Username or password is incorrect</b>";//error message
//if(isset($_POST['login'])){
    include 'button_action.php';
    $connection = mysql_connect("localhost", "root", "");

    //select db
    $db = mysql_select_db("csconnect", $connection);
    
    $compUser = $_SESSION['username'];
    
    //get company_ID
    $compID = mysql_query("SELECT Company_ID 
                           FROM company 
                           WHERE username='$compUser'", $connection);
    
    // specify the row in tmp and then grab the number
    $tmp = mysql_fetch_row($compID);
    $compID = $tmp[0];
    $_SESSION['compid'] = $compID;
    $query = mysql_query("SELECT Job_ID,Title, Position_Title, Type, City, Post_Date 
                          FROM jobs
                        WHERE Company_ID='$compID'", $connection);

    while ($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
        $JID = $row["Job_ID"];
        echo '<tr>';
            echo '<td>' . $row["Job_ID"] . '</td>';
            echo '<td>' . $row["Title"]  . '</td>';
            echo '<td>' . $row["Position_Title"]  . '</td>';
            echo '<td>' . $row["Type"]  . '</td>';
            echo '<td>' . $row["City"]  . '</td>';
            echo '<td>' . $row["Post_Date"]  . '</td>';
            echo '<form method="post">
                    <input type="hidden" name="JID" value="'.$JID.'" >
                    <td><input type="submit" value="edit" name="edit">
                    <input type="submit" value="delete" name="delete"</td>
                  </form>';
            echo '</tr>';
        }

    mysql_free_result($query);
    
    mysql_close($connection);
    
//}
?>