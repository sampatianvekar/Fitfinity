<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
</head>
<body>

<?php

$errorMessages = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (empty($_POST["name"])) {
        $errorMessages[] = "Name is required";
    }
    if (!preg_match("/^[A-Za-z\s]+$/", $_POST["name"])) {

        $errorMessages[] = "Only English alphabets and spaces are allowed in the name field.";

    }

    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errorMessages[] = "Valid email is required";
    }

    if (strlen($_POST["password"]) < 8) {
        $errorMessages[] = "Password must be at least 8 characters";
    }

    if (!preg_match("/[a-z]/i", $_POST["password"])) {
        $errorMessages[] = "Password must contain at least one letter";
    }

    if (!preg_match("/[0-9]/", $_POST["password"])) {
        $errorMessages[] = "Password must contain at least one number";
    }

    if ($_POST["password"] !== $_POST["password_confirmation"]) {
        $errorMessages[] = "Passwords must match";
    }

    if (empty($errorMessages)) {
        $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

        $mysqli = require __DIR__ . "/database.php";

        $sql = "INSERT INTO user (name, email, password_hash) VALUES (?, ?, ?)";
        
        $stmt = $mysqli->stmt_init();

        if (!$stmt->prepare($sql)) {
            die("SQL error: " . $mysqli->error);
        }

        $stmt->bind_param("sss", $_POST["name"], $_POST["email"], $password_hash);
                  
        try {
            $stmt->execute();
            header("Location: signup-success.html");
            exit;
        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() == 1062) {
                $errorMessages[] = "Email already exists";
            } else {
                die("Database error: " . $e->getMessage());
            }
        }
    }

    if (!empty($errorMessages)) {
        echo '<script type="text/javascript"> 
            alert("' . implode("\\n", $errorMessages) . '");
        </script>';
    }
}

?>

<!-- The Form Here -->

</body>
</html>


