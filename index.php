<?php
echo '
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <form action="submit.php" method="post">
        <label for="food">Food:</label><br>
        <input type="text" id="name" name="name"><br>
        <input type="text" id="food" name="food"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>';
?>