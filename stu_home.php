<?php
 session_start();
    if(!isset($_SESSION['username'])){
        header("Location:Login.php");
    }
   $connection = mysql_connect("localhost", "root", ""); 
   $db = mysql_select_db("csconnect", $connection);
   $username = $_SESSION['username'];
   $fname_quer = mysql_query("SELECT First_Name FROM students WHERE username='$username'",$connection);
   $fname_row = mysql_fetch_row($fname_quer);
   $fname = $fname_row[0];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CS Connect</title>
    <link rel="stylesheet" href="newStyles.css">
</head>
<body>
    <header>
        <img src="newSeal.png" alt="Florida State University Seal" width="189" height="81">
    </header>
    
    <nav>
        <ul>
            <li><a href="stu_home.php" title="Home" class="main">Home</a></li>
            <li><a href="search.php" title="Search" class="main">Search</a></li>
            <li><a href="" title="Settings" class="main">Settings</a></li>
        </ul>
    </nav>

    <div id="cover">
    
    <div id="infobar">
     
        <?php
            echo 'Welcome.';  
        ?>
        <a href="logout.php" title="Logout" class="logout">Logout</a>
    </div>
        
    <div id="feed">
        <h2>Available Jobs</h2>
        <?php include "job_dump.php"; ?>
    </div>
    
        

    
    <div id="links">
        <ul id="otherlist">
            <li><a href="" title="CS Homepage" class="navaway">CS Homepage</a></li>
            <li><a href="" title="Systems Group" class="navaway">Systems Group</a></li>
            
        </ul>
    </div>
        
    <div class="clearfix"></div>
        
    </div>
    
    <footer>
        <br>
        © 2015 Florida State University <br>
        600 W. College Avenue <br>
        Tallahassee, FL 32306 <br>
    </footer>
        
</body>
</html>