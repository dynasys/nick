
<html lang='en'> 
<head> 
    <link rel="stylesheet" href="StyleSheet.css">
    <title>CSCONNECT</title>
</head>
<body>
    <header>
        <img src="FSUseal.png" width="81" height="81">
        <b>FLORIDA STATE UNIVERSITY</b>
    </header>
    <div id="container">
        <form method="post" class="log">
            <input type="text" id="username" name="username" placeholder="username">
            <input type="password" id="password" name="password" placeholder="password">
            <input type="submit" value="login" name="login"><br>
            <?php
            include 'log.php';
            ?>
<!DOCTYPE HTML>
        </form>
    </div>
    <div id="Block"> 
        <h2>Welcome To CS Connect!</h2>
        <p>CS connect is where Florida State computer science students and companies can connect
            about employment opportunities.</p> 
        <h3>How it works</h3>
        <h4>Students:</h4>
        <ul>
            <li>Create a profile using your CS account</li>
        </ul>
        <h4>Employers:</h4>
        <ul>
            <li>Register your company by providing email of representative and open positions</li>
        </ul>        
    </div>
    <div id="Register">
        <a href="studentRegister.php">First time here? Click here to register!</a>
    </div>
</body>
    