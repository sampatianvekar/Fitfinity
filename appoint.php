<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">

<?php

$errorMessages = [];
$currentDate = new DateTime();  
$currentDateFormatted = $currentDate->format('d-m-Y'); 


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

   if (!empty($_POST["date"])) {
        $inputDate = DateTime::createFromFormat('d-m-Y', $_POST["date"]);

        if (!$inputDate || $inputDate->format('d-m-Y') < $currentDateFormatted) {
            $errorMessages[] = "Invalid date or the date is in the past";
        }
    } else {
        $errorMessages[] = "Date is required";
    }

if (empty($errorMessages)) {
$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO appoint (docname,name,phone, email)
        VALUES (?, ?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssss",
                  $_POST["docname"],
                  $_POST["name"],
                  $_POST["phone"],
                  $_POST["email"]);
                  
 try {
            $stmt->execute();
            header("Location: faction.php");
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

</head>
<body>
</body>
</html>


