<?php
    $connection = mysql_connect("localhost", "root", "");
    $db = mysql_select_db("csconnect", $connection);
    $JID = $_GET['JID'];
    
    

    $result=mysql_query("SELECT *
                          FROM jobs
                          WHERE Job_ID='$JID'", $connection);

    ($row = mysql_fetch_assoc($result));
        
    echo '<form method="post"><tr>
            <th class="headcol">Title</th>
            <td class="tailcol">'.$row['Title'].'</td></tr>';
    echo '<tr>
            <th class="headcol">Position</th>
            <td class="tailcol">'.$row['Position_title'].'</td></tr>';   

    // the imprtance of having the database schemas the same..
    if($row['Type'] == "Int")
        $tmp = "Internship";
    elseif ($row['Type'] == "Full")
        $tmp = "Full Time";
    else
        $tmp = "Part Time";
    echo '<tr>
            <th class="headcol">Type</th>
            <td class="tailcol">'.$tmp.'</td></tr>';
    echo '<tr>
            <th class="headcol">Location</th>
            <td class="tailcol">'.$row["City"].', '.$row["State"].'</td></tr>';
    echo '<tr>
            <th class="headcol">Company</th>
            <td class="tailcol">'.$row['name'].'</td></tr>';
    echo '<tr>
            <th class="headcol">Salary</th>
            <td class="tailcol">'.$row['Salary'].'</td></tr>';
    echo '<tr>
            <th class="headcol">Url</th>
            <td class="tailcol"><a href="http://'.$row['url'].'">'.$row['url'].'</a></td></tr>';
    echo '<tr>
            <th class="headcol">Description</th>
            <td class="tailcol">'.$row['Description'].'</td></tr>';
    echo '<tr>
            <th class="headcol">Basic Qualifications</th>
            <td class="tailcol">'.$row['Basic_Qual'].'</td></tr>';
    echo '<tr>
            <th class="headcol">Preferred Qualifications</th>
            <td class="tailcol">'.$row['Pref_Qual'].'</td></tr>';
    echo '<tr>
            <th class="headcol">Posted</th>
            <td class="tailcol">'.$row['Post_Date'].'</td></tr></table>';

    mysql_close($connection);
?>