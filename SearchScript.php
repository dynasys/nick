<?php
//echo "PHP Ran";
//session_start();

if(isset($_POST['Search'])){
	
	//echo "First if ran";
	$type=$_POST['jobType'];
	
    $f1=$_POST['feild1'];
	$f2=$_POST['feild2'];
    $f3=$_POST['feild3'];
    
	$op1=$_POST['option1'];
	$op2=$_POST['option2'];
    $op3=$_POST['option3'];
    
    $log1=$_POST['logic1'];
    $log2=$_POST['logic2'];
	$log3=$_POST['logic2'];
    
	$connection = mysql_connect('localhost', 'root', '');
	
    //Security functions
	$f1=stripslashes($f1);
	$f2=stripslashes($f2);
	$f3=stripslashes($f3);
    $op1=stripslashes($op1);
	$op2=stripslashes($op2);
	$op3=stripslashes($op3);
    $log1=stripslashes($log1);
	$log2=stripslashes($log2);
	
	
	$f1=mysql_real_escape_string($f1);
	$f2=mysql_real_escape_string($f2);
	$f3=mysql_real_escape_string($f3);
    $op1=mysql_real_escape_string($op1);
	$op2=mysql_real_escape_string($op2);
	$op3=mysql_real_escape_string($op3);
    $log1=mysql_real_escape_string($log1);
	$log2=mysql_real_escape_string($log2);

/*
    echo 'Type: '.$type.' | ';
    echo 'Field 1: '.$f1.' | ';
    echo 'Field 2: '.$f2.' | ';
    echo 'Field 3: '.$f3.' | ';
    echo 'Option 1: '.$op1.' | ';
    echo 'Option 2: '.$op2.' | ';
    echo 'Option 3: '.$op3.' | ';
    echo 'Logic 1: '.$log1.' | ';
    echo 'Logic 2: '.$log2.' | ';

    if(!$f2 AND !$f3)
        echo "<br>Fields 1 and 2 blank<br>";
*/
	//select database
	$db=mysql_select_db('csconnect', $connection);
	
	//Search query    
	$query = "SELECT *
				FROM jobs
				WHERE Type='$type' ".$log1." 
                ".$op1." LIKE '%$f1%' ".$log2." 
                ".$op2." LIKE '%$f2%' ".$log3." 
                ".$op3." LIKE '%$f3%'";
    
    // trailings ORs with nill feild return all tuples
    if(!$f3 AND $op3 == "OR"){
        $query = "SELECT *
				FROM jobs
				WHERE Type='$type' ".$log1." 
                ".$op1." LIKE '%$f1%' ".$log2." 
                ".$op2." LIKE '%$f2%'";
        if(!$f2 AND $op2 == "OR")
            $query = "SELECT *
				FROM jobs
				WHERE Type='$type' ".$log1." 
                ".$op1." LIKE '%$f1%'";
    }
    
    $result=mysql_query($query);
  
    echo "<br><br><hr>";
    if(mysql_num_rows($result) > 0){
		//echo "<br>";
		    echo'
        <table id="t01">
            <caption><h2>Results</h2></caption>
            <tr>
                <th>Title</th>
                <th>Position</th>		
                <th>Location</th>
                <th>Company</th>
                <th>Salary</th>
                <th>Description</th>
                <th>Qualifications</th>
                <th>Type</th>
                <th>Posted</th>
                <th>Option</th> 
            </tr>';
		while($row = mysql_fetch_assoc($result)){

           
            $JID = $row["Job_ID"];
            $tmp1 = $row["Description"];
            $tmp2 = $row["Basic_Qual"];
            $tmp1 = (strlen($tmp1) > 35) ? substr($tmp1,0,30).'...' : $tmp1;
            $tmp2 = (strlen($tmp2) > 35) ? substr($tmp2,0,30).'...' : $tmp2;
            echo '<form method="post">';
            echo '<tr>';
            echo '<td>' . $row["Title"]  . '</td>';
            echo '<td>' . $row["Position_title"]  . '</td>';
            echo '<td>' . $row["City"]  . ', '.$row["State"].'</td>';
            echo '<td>' . $row["name"]  . '</td>';
            echo '<td>' . $row["Salary"]  . '</td>';
            echo '<td>' . $tmp1  . '</td>';
            echo '<td>' . $tmp2  . '</td>';
            echo '<td>' . $row["Type"]  . '</td>';
            echo '<td>' . $row["Post_Date"]  . '</td>';
            echo '<input type="hidden" name="JID" value="'.$JID.'" >
                  <td><input type="submit" value="view" name="view">
                  </form>';
            echo '</tr>';
		}

	}else{
		echo "0 results";
	}
   
    echo '</table>';
    
	mysql_close($connection);
}
?>
