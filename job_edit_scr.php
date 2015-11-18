<?php
    include 'job_edit_submit_scr.php';
    $connection = mysql_connect("localhost", "root", "");
    $db = mysql_select_db("csconnect", $connection);
    $JID = $_GET['JID'];
    $query = mysql_query("SELECT Job_ID, Title, Position_Title, Type, Salary, City, 
                                 State, url, Description, Basic_Qual, Pref_Qual 
                          FROM jobs
                          WHERE Job_ID='$JID'", $connection);
    $row = mysql_fetch_row($query);
    $JID = $row[0];
    $title = $row[1];
    $pos = $row[2];
    $type = $row[3];
    $sal = $row[4];
    $city = $row[5];
    $state = $row[6];
    $url = $row[7];
    $desc = $row[8];
    $basic = $row[9];
    $pref = $row[10];

    //echo the table
    echo '<form method="post"><tr>';
        echo '<th class="headcol">Title</th>';
        echo '<td class="tailcol"><textarea name="title" rows="1" cols="65">'. $title .'</textarea></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">Position</th>';
        echo '<td class="tailcol"><textarea name="position" rows="1" cols="65">'. $pos .'</textarea></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">Type</th>';
        echo '<td class="tailcol">';
            echo'<select name="select">
                 <option value="Int" selected>Internship</option>
                 <option value="Part">Part-time</option>
                 <option value="Full">Full-time</option>
                 </select>';
            

    echo '</td></tr>';
    
    echo '<tr>';
        echo '<th class="headcol">Salary</th>';
        echo '<td class="tailcol"><textarea name="salary" rows="1" cols="65">'. $sal .'</textarea></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">City</th>';
        echo '<td class="tailcol"><textarea name="city" rows="1" cols="65">'. $city .'</textarea></td>';
    echo '</tr>';

    echo '<tr>';
        echo '<th class="headcol">State</th>';
        echo '<td class="tailcol"><textarea name="state" rows="1" cols="65">'. $state .'</textarea></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">Url</th>';
        echo '<td class="tailcol"><textarea name="url" rows="1" cols="65">'. $url .'</textarea></td>';
    echo '</tr>';

    echo '<tr>';
        echo '<th class="headcol">Description</th>';
        echo '<td class="tailcol"><textarea name="description" rows="5" cols="65">'. $desc .'</textarea></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">Basic Qualifications</th>';
        echo '<td class="tailcol"><textarea name="basiq" rows="5" cols="65">'. $basic .'</textarea></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">Preferred Qualifications</th>';
        echo '<td class="tailcol"><textarea name="prefq" rows="5" cols="65">'. $pref .'</textarea></td>';
    echo '</tr></table>';

    echo '<form class="subut" method="post">
          <input type="hidden" name="JID" value="'.$JID.'" >
          <input type="submit" value="submit" name="submit">
          <input type="submit" value="cancel" name="cancel">
          </form>';


?>