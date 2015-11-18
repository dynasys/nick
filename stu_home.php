<?php
 session_start();
    if(!isset($_SESSION['username'])){
    header("Location:Login.php");
    }
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
            <li><a href="" title="Home" class="main">Home</a></li>
            <li><a href="" title="Profile" class="main">Profile</a></li>
            <li><a href="" title="Jobs" class="main">Jobs</a></li>
            <li><a href="" title="Alerts" class="main">Alerts</a></li>
            <li><a href="" title="Settings" class="main">Settings</a></li>
        </ul>
    </nav>

    <div id="cover">
    
    <div id="infobar">
     
        
        <a href="logout.php" title="Logout" class="logout">Logout</a>
    </div>
        
    <div id="feed">
        <?php include "job_dump.php"; ?>
    </div>
    
    <div id="profileInfo">
        Paul - Nieto
        <br>
        Junior, Graduating Apr 2017 <br>
        Computer Science
        <br>
        pn13b@my.fsu.edu <br>
        resume last updated: tuba <br>
        <br>
        profile completion <br>
        enter bar here
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