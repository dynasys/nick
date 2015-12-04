
<html lang='en'> 
<head> 
    <link rel="stylesheet" href="StyleSheet.css">
    <title>CSCONNECT</title>
</head>
<body>
    <header>
        <img src="newSeal.png" width="189" height="81">
    </header>
    <div id="container">
        <form method="post" class="log">
            <input type="text" id="username" name="username" placeholder="username">
            <input type="password" id="password" name="password" placeholder="password">
            <input type="submit" value="login" name="login"><br>
            <?php
            include 'login_scr.php';
            ?>
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
            <li>Sign in</li>
            <li>Search for a job that fits your needs!</li>
        </ul>
        <h4>Employers:</h4>
        <ul>
            <li>Register your company by providing email of representative and open positions</li>
            <li>Wait for the administrator to give you login information</li>
            <li>Post job information</li>
            <li>Edit/delete jobs once you've posted them    </li>
        </ul>        
    </div>
    <div id="Register">
        <a href="studentRegister.php">First time here? Click here to register!</a>
    </div>
</body>
    