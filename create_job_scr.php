<?php
    include'create_job_submit_scr.php';
     
echo '<form method="post"><tr>';
        echo '<th class="headcol">Title</th>';
        echo '<td class="tailcol"><textarea name="title" rows="1" cols="65"></textarea></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">Position</th>';
        echo '<td class="tailcol"><textarea name="position" rows="1" cols="65"></textarea></td>';
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
        echo '<td class="tailcol"><textarea name="salary" rows="1" cols="65"></textarea></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">City</th>';
        echo '<td class="tailcol"><textarea name="city" rows="1" cols="65"></textarea></td>';
    echo '</tr>';

    echo '<tr>';
        echo '<th class="headcol">State</th>';
        echo '<td class="tailcol"><textarea name="state" rows="1" cols="65"></textarea></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">Url</th>';
        echo '<td class="tailcol"><textarea name="url" rows="1" cols="65"></textarea></td>';
    echo '</tr>';

    echo '<tr>';
        echo '<th class="headcol">Description</th>';
        echo '<td class="tailcol"><textarea name="description" rows="5" cols="65"></textarea></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">Basic Qualifications</th>';
        echo '<td class="tailcol"><textarea name="basiq" rows="5" cols="65"></textarea></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<th class="headcol">Preferred Qualifications</th>';
        echo '<td class="tailcol"><textarea name="prefq" rows="5" cols="65"></textarea></td>';
    echo '</tr></table>';

    echo '<form class="subut" method="post">    
          <input type="submit" value="submit" name="submit">
          <input type="submit" value="cancel" name="cancel">
          </form>';
//<input type="hidden" name="JID" value="'.$JID.'" >

?>