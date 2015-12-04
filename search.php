<?php 

    include "View_button_scr.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CS Connect</title>
    <link rel="stylesheet" href="newStyles.css">
    <style>
        table {
            width:100%;
            padding-bottom: 10%;
            margin-bottom: 15%;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
        table#t01 tr:nth-child(even) {
            background-color: #eee;
        }
        table#t01 tr:nth-child(odd) {
            background-color:#fff;
        }
        table#t01 th	{
            background-color: #782f40;
            color: white;
        }
        .cjobut{
            text-align: right;
        }
        .search{
            padding-top: 3.5%;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <img src="newSeal.png" alt="Florida State University Seal" width="189" height="81">
    </header>
    
    <nav>
        <ul>
            <li><a href="stu_home.php" title="Home" class="main">Home</a></li>
            <li><a href="search.php" title="Search" class="main">Search</a></li>
            <li><a href="student_passwordchange.php" title="Settings" class="main">Settings</a></li>
        </ul>
    </nav>

    <div id="cover">
    
        <div id="infobar">
            Welcome <a href="logout.php" title="Logout" class="logout">Logout</a>
        </div>
    
        <form method="post" id="search_box" class='search'>
            <select name="jobType">
                <option value="Int" selected>Internship</option>
                <option value="Full">Full-Time</option>
                <option value="Part">Part-Time</option>
            </select>
            
            <br>
            <select name="logic1">
                <option value="AND" selected>AND</option>
                <option value="OR">OR</option>
            </select>
            
            <input type="text" name="feild1" id='field1'>
            
            <select name="option1">
                <option value="Title" selected>Title</option>
                <option value="Position_title">Position</option>
                <option value="City">City</option>
                <option value="State">State</option>
                <option value="name">Company</option>
                <option value="Description">Descritption</option>
                <option value="Basic_Qual">Qualifications</option>
            </select>
            
            <br>
            <select name="logic2">
                <option value="AND" selected>AND</option>
                <option value="OR">OR</option>
            </select>
            
            <input type="text" name="feild2" id='feild2'>
            
            <select name="option2">
                <option value="Title" selected>Title</option>
                <option value="Position_title">Position</option>
                <option value="City">City</option>
                <option value="State">State</option>
                <option value="name">Company</option>
                <option value="Description">Descritption</option>
                <option value="Basic_Qual">Qualifications</option>
            </select>
            
            <br>
            <select name="logic3">
                <option value="AND" selected>AND</option>
                <option value="OR">OR</option>
            </select>
            
            <input type="text" name="feild3" id='field3'>
            
            <select name="option3">
                <option value="Title" selected>Title</option>
                <option value="Position_title">Position</option>
                <option value="City">City</option>
                <option value="State">State</option>
                <option value="name">Company</option>
                <option value="Description">Descritption</option>
                <option value="Basic_Qual">Qualifications</option>
            </select>
            
            <br>
            <input type="Submit" value="Search" name="Search">
			
			<?php
			include 'SearchScript.php';
			?>
			
        </form>
        
        
        
        <div id="results">
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
