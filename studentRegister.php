<!DOCTYPE HTML>
<html lang='en'> 
<head> 
    <link rel="stylesheet" href="StyleSheet.css">
    <title>CSCONNECT</title>
</head>
<body>
    <header>
        <img src="newSeal.png" width="300" height="100">
    </header>
    <div id="comp_reg" class="comp_reg">
        <a href="companyRegister.php">companies</a>
    </div>
    <form method="post" id="reg_box" class="register"> 
        <fieldset>
            <legend>Students</legend>
            <input type="text" name="fname" placeholder="First Name" id="fname"><br>
            <input type="text" name="lname" placeholder="Last Name" id="lname"><br>
            <input type="text" name="csuser"placeholder="CS Username" id="csuser"><br>
            <input type="Password" name="password1" placeholder="Password" id="password1"><br>
            <input type="Password" name="password2" placeholder="Re-enter Password" id="password2"><br>
            <input type="email" name="email" placeholder="E-mail" id="email"><br>
            <input type="Submit" value="Submit" name="submit">
            <?php
                include 'StudentRegister_scr.php';
            ?>
        </fieldset>
    </form>    
</body>