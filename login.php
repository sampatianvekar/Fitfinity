<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            
            header("Location: home1.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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

label {
    vertical-align: middle;
    margin-bottom: 4px;
    display: inline-block;
    color:#006cff;
}

user agent stylesheet
label {
    cursor: default;
}


input {
    color: #1d1d1d;
    color: white;
    background-color: black;
    background-color: black;
    font-family: inherit;
    font-size: inherit;
    margin-right: 6px;
    margin-bottom: 6px;
    padding: 10px;
    border: none;
    border-radius: 6px;
    outline: none;
}


input:not([type="range"]):not([type="color"]) {
    writing-mode: horizontal-tb !important;
}

button {
    background-color: #d0cfcf;
    background-color: var(--button-base);
    padding-right: 30px;
    padding-left: 30px;
}

button {
    color: white;
    color: white;
    background-color: #006cff;
    background-color: #006cff;
    font-family: inherit;
    font-size: inherit;
    margin-right: 6px;
    margin-bottom: 6px;
    padding: 10px;
    border: none;
    border-radius: 6px;
    outline: none;
}
button, select, input[type='submit'], input[type='reset'], input[type='button'], input[type='checkbox'], input[type='range'], input[type='radio'] {
    cursor: pointer;
}
button {
    transition: background-color 0.1s linear, border-color 0.1s linear, color 0.1s linear, box-shadow 0.1s linear, transform 0.1s ease;
    transition: background-color var(--animation-duration) linear, border-color var(--animation-duration) linear, color var(--animation-duration) linear, box-shadow var(--animation-duration) linear, transform var(--animation-duration) ease;
}

    </style>

<script type="text/javascript">
  function preventBack() 
  {window.history.forward(); }
  setTimeout("preventBack()",0);
  window.onunload=function () {null};

</script>
</head>
<body>

    <div class="container">

    <div class="sidebar">


    <h1>Login</h1>
    
    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
    
    <form method="post">
        <label for="email">email</label>
        <input type="email" name="email" id="email"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
        
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        
        <button>Log in</button> <a href="signup.html">Create an account</a>

        
    </form>
    </div>
    <div class=content>
        <img src="dcbg.jpg" width=300px height=300px>
        <h1>Welcome Back to FITFINITY</h1>
    </div>
</div>
</body>
</html>








