<?php
// Start the session and check if the user is logged in
session_start();

// Logout Logic - placed at the top of the script

// Check if the user is logged in

// Fetch products from the database
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>

    <style>
        .home-container{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
    width: 100%;
    color:aliceblue;

}
.main1-container{
    font-style: italic;
    color: #fff;
    font-size: 2em;
}
.bd-home{
    background-image: url('images/Fashion.jpg');
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
}
footer {
    background-color: #2c3e50;
    color: white;
    text-align: center;
    padding: 20px 0;
    margin-top: 40px;
    position: fixed;
    bottom: 0;
    width: 100%;
}

footer p {
    margin: 0;
    font-size: 1.1em;
}
header h1 {
    margin: 0;
    font-size: 10em;
}
nav a{
    color: white;
    text-decoration: none;
    margin: 0 15px;
    font-size: 1em;
    text-transform: uppercase;
    display: inline-block;
}
nav a:hover{
    color: #ffcc00;
}

</style>
</head>
<body class="bd-home">
    <header>
        <div class="home-container">
            <h1>StyleReboot</h1>
            <nav>
                <a href="admin/login.php">Admin</a>
                <a href="pages/login.php">Login</a>
                <a href="pages/register.php">Register</a>
                
            </nav>
        </div>
    </header>
    <div class="main1-container">
        <marquee><h4>Every day is a fashion show, and the world is your runway</h4></marquee>
        
    </div>
    <footer>
        <p>&copy; <?= date('Y'); ?> StyleReboot. All rights reserved.</p>
    </footer>
</body>
</html>
