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
        <a href="studentRegister.html">students</a>
    </div>
    <form method="post" action="" id="reg_box" class="register"> 
        <fieldset>
            <legend>companies</legend>
            <input type="text" name="cname" placeholder="Company Name" id="cname"><br>
            <input type="text" name="repFname" placeholder="Company Representative First Name" id="repFname"<br>
            <input type="text" name="repLname" placeholder="Company Representative Last Name" id="repLname"><br>
            <input type="text" name="pnumber" placeholder="Phone number" id="pnumber"><br>
            <input type="email" name="email" placeholder="E-mail" id="email"><br>
            <input type="Submit" value="Submit">
            <div id="note">
                <b><u>Note:</u></b> Clicking submit will send your request to the system administrator who will then veryfy that you
                are a legitimate company. Upon verification, the administrator will email you with a username and temporary
                password. It will be up to you to change this password.
            </div>
        </fieldset>
    </form>    
    <footer>
            Made by Dynasys. FSU dept of computer science. 
    
    </footer>
</body>