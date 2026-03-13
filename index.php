<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>
        body
 {
    background-color: #006cff;
    
    background-image: url(loginbg.png);
    background-size: 1700px 1100px;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 50px;
 }      


.container {
    display: flex;
}
    

        .sidebar {
    
    width: 250px;
    background-color: white;
    opacity: 0.7;
    
    padding: 20px;
}


       .content {
   background-color:white;
   opacity: 0.9;
     flex: 1;
    padding:  100px;
     text-align: center;
}

.content h1
{
    font-family: "Times New Roman";
}

h1{
    color:#006cff;
}
 
</style>
</head>
<body>
    
    <div class="container">
        <div class="sidebar">
    <h1>Home</h1>
    
    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>
</div>
<div class=content>
        <img src="dcbg.jpg" width=300px height=300px>
        <h1>Welcome to FITFINITY</h1>
    </div>
</div>
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    