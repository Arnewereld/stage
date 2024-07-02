<?php
    include "telefoon.php";

    $telefoon  = new telefoon(new DB());

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try{
            $telefoon->inserttelefoons($_POST["merk"], $_POST["model"], $_POST["merk"], $_POST["opslag"], $_POST["prijs"]);
            ECHO "Success";
        } catch (Exception $e){
            echo "Error" . $e->getMessage();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Add telefoon</title>
</head>
<body>
    <form method="POST">
    <input type="text" name="merk" placeholder="merk">
    <input type="text" name="model" placeholder="model">
    <input type="text" name="opslag" placeholder="opslag">
    <input type="text" name="prijs" placeholder="prijs">
    <input type="submit"> 
    </form>
</body>
</html>